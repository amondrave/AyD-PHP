<?php

require_once 'models/convocatoriamodel.php';
require_once 'models/semestremodel.php';
require_once 'entities/Convocatoria.php';

class ConvocatoriaController extends Controller{
    protected $convocatoriaModel;
    public function __construct()
    {
     $this->convocatoriaModel = $this->model('convocatoria');   
    }

    public function actionIndex(){
        $semestres = $this->obtenerSemestres();
        $datos = ['titulo' => "crear convocatoria",'semestres'=>$semestres];
        $this->view('nuevo',$datos);
    }


    public function obtenerSemestres(){
        $semestre = new SemestreModel();
        return $semestre->obtenerTodos();
    }

    public function actionNuevo(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['fecha_inicio'],$_POST['nombre'],$_POST['semestre'],$_POST['cierre'])){
                $fechaInicio = $_POST['fecha_inicio'];
                $nombre = $_POST['nombre'];
                $semestre = $_POST['semestre'];
                $fechaCierre = $_POST['cierre'];
                $convocatoria = new Convocatoria();
                $convocatoria->setFechaInicio($fechaInicio);
                $convocatoria->setNombre($nombre);
                $convocatoria->setSemestre($semestre);
                $convocatoria->setFechaCierre($fechaCierre);
                if($this->convocatoriaModel->insertar($convocatoria)){
                    $this->__construct();
                    $this->actionIndex();
                }else{
                    $datos = ['titulo'=>'Error','mensaje'=>'Lo sentimos no se pudo añadir la convocatoria revise nuevamente'];
                    $this->view('error',$datos);
                }
            }else{
                echo("<p>No toma datos</p>");
            }
        }else{
            $datos = ['titulo'=>"Registro"];
            $this->view('nuevo',$datos);
            echo("<p>nada</p>");
        }
    }

}


?>