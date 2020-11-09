<?php

require_once 'models/personamodel.php';
require_once 'models/estudiantemodel.php';
require_once 'models/convocatoriamodel.php';


class EstudianteController extends Controller
{
    private $estudianteController;

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

    public function actionRegistro()
    {
        $convocatoria = $this->obtenerConvoncatoriasActivas();
        $estado = $this->obtenerEstadoProyecto();
        $tipo = $this->obtenerTipoProyecto();
        $datos = [
            'convocatoria' => $convocatoria,
            'estado' => $estado,
            'tipo' => $tipo
        ];
        $this->view('registrar', $datos);
    }

    public function actionCrear()
    {
    }
}
