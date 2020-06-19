<?php

require_once 'models/personamodel.php';
require_once 'models/administradormodel.php';

class LoginController extends Controller{

    private $administradorModel;

    public function __construct(){
        $this->administradorModel = $this->model('administrador');
    }

    public function actionIndex(){
        $datos = ['titulo'=>"es la condicion"];
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
           echo("<p>pero del guetto</p>");
           header("locaction: ". URL. "index");
       }

    }


    public function actionHome(){
        $this->view('home',[]);
    }


}


?>