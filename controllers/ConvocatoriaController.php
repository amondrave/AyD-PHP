<?php

require_once 'models/convocatoriamodel.php';
require_once 'models/semestremodel.php';
require_once 'entities/Convocatoria.php';

class ConvocatoriaController extends Controller
{
    protected $convocatoriaModel;
    public function __construct()
    {
        $this->convocatoriaModel = $this->model('convocatoria');
    }

    public function actionIndex()
    {
        $semestres = $this->obtenerSemestres();
        $datos = ['titulo' => "crear convocatoria", 'semestres' => $semestres];
        $this->view('nuevo', $datos);
    }

    public function obtenerConvocatoriasInhabilitadas()
    {
        return $this->convocatoriaModel->obtenterConvocatoriasInactivas();
    }

    public function obtenerSemestres()
    {
        $semestre = new SemestreModel();
        return $semestre->obtenerTodos();
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['fecha_inicio'], $_POST['nombre'], $_POST['semestre'], $_POST['cierre'], $_POST['estado'], $_POST['descripcion'])) {
                $fechaInicio = $_POST['fecha_inicio'];
                $nombre = $_POST['nombre'];
                $semestre = $_POST['semestre'];
                $fechaCierre = $_POST['cierre'];
                $descripcion = $_POST['descripcion'];
                $estado = $_POST['estado'];
                $convocatoria = new Convocatoria();
                $convocatoria->setFechaInicio($fechaInicio);
                $convocatoria->setNombre($nombre);
                $convocatoria->setSemestre($semestre);
                $convocatoria->setFechaCierre($fechaCierre);
                $convocatoria->setDescripcion($descripcion);
                $convocatoria->setHabilitadas($estado);
                if ($this->convocatoriaModel->insertar($convocatoria)) {
                    $this->__construct();
                    $this->actionGestion();
                } else {
                    $datos = ['titulo' => 'Error', 'mensaje' => 'Lo sentimos no se pudo añadir la convocatoria revise nuevamente'];
                    $this->view('error', $datos);
                }
            } else {
                echo ("<p>No toma datos</p>");
            }
        } else {
            $datos = ['titulo' => "Registro"];
            $this->view('nuevo', $datos);
            echo ("<p>nada</p>");
        }
    }

    public function actionProyectos()
    {
        $lista = $this->obtenerConvocatorias();
        $datos = [
            'titulo' => 'Proyectos registrados en el sistema',
            'lista' => $lista,
            'mensaje' => 'Listado de convocatorias existentes'
        ];
        $this->view('proyectos', $datos);
    }

    public function obtenerConvocatorias()
    {
        return $this->convocatoriaModel->obtenerTodos();
    }

    public function actionHabilitar()
    {
        $lista = $this->obtenerConvocatoriasInhabilitadas();
        $datos = [
            'convocatorias' => $lista,
            'mensaje' => 'Concocatorias para activar'
        ];
        $this->view('habilitar', $datos);
    }

    public function actionActivar()
    {
        $id = $_GET['convocatoria'];
        if ($id != null) {
            $this->convocatoriaModel->habilitar($id);
            $this->actionHabilitar();
        } else {
            echo "ERROR";
        }
    }

    public function actionGestion()
    {
        require_once 'controllers/LoginController.php';
        $loginController = new LoginController();
        $convocatoria = $this->obtenerConvocatorias();
        foreach ($convocatoria as $c) {
            $semestre = $loginController->obtenerSemestre($c->getSemestre());
            $sem = $semestre->getAnio() . "-" . $semestre->getPeriodo();
            $c->setSemestre($sem);
        }
        $datos = ['titulo' => "crear convocatoria", 'convocatoria' => $convocatoria];
        $this->view('gestion', $datos);
    }

    public function actionBorrar()
    {
        $lista = $this->obtenerConvocatoriasInhabilitadas();
        $datos = [
            'convocatorias' => $lista
        ];
        $this->view('eliminar', $datos);
    }

    public function actionEliminar()
    {
        $id = $_GET['convocatoria'];
        if ($id != null) {
            $this->convocatoriaModel->eliminar($id);
            $this->actionGestion();
        } else {
            echo "ERROR";
        }
    }

    public function actionDocente()
    {
        $profesores = $this->obtenenerNombres();
        $proyectos = $this->obtenerProyectos();
        $datos = [
            'profesores' => $profesores,
            'proyectos' => $proyectos
        ];
        $this->view('asignar', $datos);
    }

    public function actionAsignar()
    {
        require_once 'models/proyectoprofesormodel.php';
        $proyectoProfesorModel = new ProyectoProfesorModel();
        $profesor = $_GET['profesor'];
        $proyecto = $_GET['proyecto'];
        if ($profesor != null && $proyecto != null) {
            if ($proyectoProfesorModel->insertar($profesor, $proyecto)) {
                echo "<script>
                       alert('Se ha asignado correctamente');
                      </script>";
                $this->actionDocente();
            } else {
                echo "<script>
                       alert('Lo siento ha ocurrido un error');
                      </script>";
                $this->actionDocente();
            }
        } else {
            $dataError = [
                'titulo' => 'Error',
                'mensaje' => 'Lo sentimos ha ocurrido un error'
            ];
            $this->view('error', $dataError);
        }
    }
    public function obtenenerNombres()
    {
        require_once 'models/profesormodel.php';
        require_once 'models/personamodel.php';
        $profesorModel = new ProfesorModel();
        $profesores = $profesorModel->obtenerTodos();
        $personaModel = new PersonaModel();
        $personas = [];
        foreach ($profesores as $p) {
            $persona = $personaModel->buscar($p->getDocumento());
            array_push($personas, $persona);
        }
        return $personas;
    }

    public function obtenerProyectos()
    {
        require_once 'models/proyectomodel.php';
        $proyectoModel = new ProyectoModel();
        return $proyectoModel->obtenerTodos();
    }
}
