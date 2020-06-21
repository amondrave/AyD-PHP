<?php

require_once 'models/tipodocumentomodel.php';
require_once 'models/personamodel.php';
require_once 'models/estudiantemodel.php';
require_once 'models/profesormodel.php';
require_once 'entities/Persona.php';


class IndexController extends Controller{

    protected $tipoDocumentoModel;
    protected $personaModel;
    private $profesorModel;
    private $estudianteModel;

    public function __construct(){
        $this->personaModel = $this->model('persona');
        $this->profesorModel = new ProfesorModel();
        $this->estudianteModel = new EstudianteModel();
    }

    public function actionIndex(){
        $datos = ["titulo"=>"Inicio de sesión"];
        $this->view('index',$datos);
    }

    public function actionRegistro(){
        $documentos = $this->obtenerDocumentos();
        $datos = ["titulo" => "Registrese","documentos"=>$documentos ];
        $this->view('registro',$datos);
    }

    public function actionError(){
        $datos = ["titlo" => 'error'];
        $this->view('error',$datos);
    }

    public function actionAdmin(){
        $datos = ['titulo' => 'Administrador'];
        $this->view('login',$datos);
    }

    public function obtenerDocumentos(){
        $this->tipoDocumentoModel = new TipoDocumentoModel();
        return $this->tipoDocumentoModel->obtenerTodos();
    }

    


}

?>