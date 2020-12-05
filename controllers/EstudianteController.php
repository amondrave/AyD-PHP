<?php

require_once 'models/personamodel.php';
require_once 'models/estudiantemodel.php';
require_once 'models/convocatoriamodel.php';
require_once 'models/proyectomodel.php';
require_once 'models/estudianteproyectomodel.php';
require_once 'entities/Proyecto.php';

class EstudianteController extends Controller
{
    private $estudianteController;
    private $sesion;

    public function __construct()
    {
        $this->estudianteController = $this->model('estudiante');
    }

    public function actionIndex()
    {
        $this->view('inicio', '');
    }

    /**
     * Metodo para que el usuario esudiante inice sesión
     * se recuperan del formulario los campos del codigo, documento y contraseña
     * Al finalizar debemos mandar la sección al controlador y este dirigiria al home de estudiante
     */
    public function actionLogin()
    {
        if (isset($_POST['codigo'], $_POST['documento'], $_POST['contrasena'])) {
            session_start();
            $codigo = $_POST['codigo'];
            $documento = $_POST['documento'];
            $contrasena = $_POST['contrasena'];
            $codigoAlumno = $this->sacarCodigo($codigo);
            if ($this->estudianteController->existe($codigoAlumno)) {
                $personaModel = new PersonaModel();
                if ($personaModel->existe($documento, $contrasena)) {
                    $_SESSION['estudiante'] = $documento;

                    echo "<script>
                            window.location='" . URL . "estudiante/home';
                         </script>";
                } else {
                    echo "<p>Datos equivocados</p>";
                    header("locaction: " . URL . "index");
                }
            } else {
                echo "<p> No existe en el sistema </p>";
                header("locaction: " . URL . "index");
            }
        } else {
            header("locaction: " . URL . "index");
        }
    }

    public function sacarCodigo($codigo)
    {
        $str = "";
        for ($i = 3; $i <= 6; $i++) {
            $str .= $codigo[$i];
        }
        return $str;
    }

    public function actionHome()
    {
        $convocatoria = $this->obtenerConvoncatoriasActivas();
        $datos = [
            'tituo' => 'alumno',
            'convocatoria' => $convocatoria
        ];
        $this->view('inicio', $datos);
    }

    public function actionCerrar()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URL . 'index');
    }

    public function obtenerConvoncatoriasActivas()
    {
        $convocatoriaModel = new ConvocatoriaModel();
        $convocatorias = $convocatoriaModel->obtenerActivas();
        require_once 'controllers/LoginController.php';
        $login = new LoginController();
        foreach ($convocatorias as $c) {
            $semestre = $login->obtenerSemestre($c->getSemestre());
            $sem = $semestre->getAnio() . "-" . $semestre->getPeriodo();
            $c->setSemestre($sem);
        }
        return $convocatorias;
    }

    public function obtenerTipoProyecto()
    {
        require_once 'models/tiproyectomodel.php';
        $tipoProyectoModel = new TipoProyectoModel();
        $tipoProyecto = $tipoProyectoModel->obtenerTodos();
        return $tipoProyecto;
    }

    public function obtenerEstadoProyecto()
    {
        require_once 'models/estadoproyectomodel.php';
        $estadoModel = new EstadoProyectoModel();
        $estado = $estadoModel->obtenerTodos();
        return $estado;
    }

    public function obtenterSemillero()
    {
        require_once 'models/semilleromodel.php';
        $semillero = new SemilleroModel();
        return $semillero->obtenerTodos();
    }

    public function actionRegistro()
    {
        $convocatoria = $this->obtenerConvoncatoriasActivas();
        $estado = $this->obtenerEstadoProyecto();
        $tipo = $this->obtenerTipoProyecto();
        $semillero = $this->obtenterSemillero();
        $datos = [
            'convocatoria' => $convocatoria,
            'estado' => $estado,
            'tipo' => $tipo,
            'semillero' => $semillero
        ];
        $this->view('registrar', $datos);
    }

    public function actionCrear()
    {
        if (isset($_POST['codigo'], $_POST['nombre'], $_POST['documento'], $_POST['convocatoria'], $_POST['tipo'], $_POST['estado'], $_POST['semillero'], $_POST['fecha'])) {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $documento = $_POST['documento'];
            $convocatoria = $_POST['convocatoria'];
            $tipo = $_POST['tipo'];
            $estado = $_POST['estado'];
            $semillero = $_POST['semillero'];
            $fecha = $_POST['fecha'];
            $proyecto = new Proyecto();
            $proyecto->setIdProyecto($codigo);
            $proyecto->setNombre($nombre);
            $proyecto->setConvocatoria($convocatoria);
            $proyecto->setTipoproyecto($tipo);
            $proyecto->setEstado($estado);
            $proyecto->setSemillero($semillero);
            $proyecto->setFecha($fecha);
            $proyecto->setNotaFinal(0, 0);
            $proyectoModel = new ProyectoModel();
            if ($proyectoModel->insertar($proyecto)) {
                $estudianteProyectoModel = new EstudianteProyectoModel();
                $estudianteProyectoModel->insertar($codigo, $documento);
                $this->actionHome();
            } else {
                echo "ERROR al insertar";
            }
        } else {
            echo "ERROR con el formulario";
        }
    }

    public function actionProyectos($sesion)
    {
        require_once 'models/estudianteproyectomodel.php';
        $proyectoAlumno = new EstudianteProyectoModel();
        $proyectoModel = new ProyectoModel();
        $proyectos = [];
        //session_start();
        $id = implode($sesion);
        // Recuperamos el valor que se almacena en nuestra sesión activa
        $documento = $id;
        $codigosProyectos = $proyectoAlumno->obtenerProyecto($documento);
        foreach ($codigosProyectos as $c) {
            $tmp = $proyectoModel->buscar($c);
            array_push($proyectos, $tmp);
        }
        foreach ($proyectos as $p) {
            $semi = $this->obtenerSemillero($p->getSemillero());
            $convo = $this->obtenerConvocatoria($p->getConvocatoria());
            $est = $this->obtenerEstado($p->getEstado());
            $p->setSemillero($semi);
            $p->setConvocatoria($convo);
            $p->setEstado($est);
        }
        $datos = ['proyectos' => $proyectos];
        $this->view('proyectos', $datos);
    }

    public function obtenerConvocatoria($id)
    {
        $convocatoriaModel = new ConvocatoriaModel();
        $convocatoria = $convocatoriaModel->buscar($id);
        return $convocatoria->getNombre();
    }
    public function obtenerSemillero($id)
    {
        require_once 'models/semilleromodel.php';
        $semilleroModel = new SemilleroModel();
        $semillero = $semilleroModel->obtener($id);
        return $semillero->getNombre();
    }
    public function obtenerEstado($id)
    {
        require_once 'models/estadoproyectomodel.php';
        $estadoModel = new EstadoProyectoModel();
        $estado = $estadoModel->buscar($id);
        return $estado->getNombre();
    }
}
