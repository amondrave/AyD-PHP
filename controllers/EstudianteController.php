<?php

require_once 'models/personamodel.php';
require_once 'models/estudiantemodel.php';
require_once 'models/convocatoriamodel.php';

class EstudianteController extends Controller{
    private $estudianteController;

    public function __construct(){
        $this->estudianteController = $this->model('estudiante');
    }

    public function actionIndex(){
        $this->view('inicio','');
    }

    /**
     * Metodo para que el usuario esudiante inice sesión
     * se recuperan del formulario los campos del codigo, documento y contraseña
     * Al finalizar debemos mandar la sección al controlador y este dirigiria al home de estudiante
     */
    public function actionLogin(){
        if(isset($_POST['codigo'],$_POST['documento'],$_POST['contrasena'])){
            session_start();
            $codigo = $_POST['codigo'];
            $documento = $_POST['documento'];
            $contrasena = $_POST['contrasena'];
            $codigoAlumno = $this->sacarCodigo($codigo);
            if($this->estudianteController->existe($codigoAlumno)){
                $personaModel = new PersonaModel();
                if($personaModel->existe($documento,$contrasena)){
                    $_SESSION['estudiante'] = $codigoAlumno;
                     $this->actionHome();
                }else{
                    echo "<p>Datos equivocados</p>";
                    header("locaction: ". URL. "index");
                }
            }else{
                echo "<p> No existe en el sistema </p>";
                header("locaction: ". URL. "index");
            }
        }else{
           header("locaction: ". URL. "index");
        }
    }

    public function sacarCodigo($codigo){
        $str = "";
        for($i = 3; $i<=6; $i++){
            $str.=$codigo[$i];
        }
        return $str;
    }

    public function actionHome(){
        $datos =['tituo'=>'alumno'];
        $this->view('inicio',$datos);
    }

    public function actionCerrar(){
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URL . 'estudiante');
    }
}


?>