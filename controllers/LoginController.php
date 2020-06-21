<?php

require_once 'models/personamodel.php';
require_once 'models/administradormodel.php';
require_once 'models/convocatoriamodel.php';

class LoginController extends Controller{

    private $administradorModel;

    public function __construct(){
        $this->administradorModel = $this->model('administrador');
    }

    public function actionIndex(){
        $datos = ['titulo'=>"Administrador"];
        $this->view('login',$datos);
    }

    public function actionLogin(){
       if(isset($_POST['documento'],$_POST['contrasena'])){
            session_start();
            $documento = $_POST['documento'];
            $contra = $_POST['contrasena'];
            if($this->administradorModel->existe($documento)){
                $personaModel = new PersonaModel();
                if($personaModel->existe($documento,$contra)){
                    $_SESSION['user'] = $documento;
                    header("location: ". URL. "login/home");
                }else{
                    echo "<p>Contraseña Incorrecta</p>";
                }
            }else{
                echo("No existe en el sistema");
            }
       }else{
           echo("<p>F</p>");
           header("locaction: ". URL. "index");
       }

    }


    public function actionHome(){
        $convocatorias = $this->obtenerConvocatorias();
        foreach($convocatorias as $c){
            $semestre = $this->obtenerSemestre($c->getSemestre());
            $sem = $semestre->getAnio()."-".$semestre->getPeriodo();
            $c->setSemestre($sem);
        }
        $datos = ['titulo' => 'inicio','listaConvo'=>$convocatorias];
        $this->view('home',$datos);
    }

    public function actionCerrar(){
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URL . 'admin');
    }

    public function obtenerConvocatorias(){
        $convocatoria = new ConvocatoriaModel();
        return $convocatoria->obtenerTodos();
    }

    public function obtenerSemestre($id = null){
        require_once 'models/semestremodel.php';
        $semestreModel = new SemestreModel();
        return $semestreModel->buscarPorId($id);
    }


}


?>