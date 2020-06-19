<?php


class IndexController extends Controller{


    public function __construct(){

    }

    public function actionIndex(){
        $datos = ["titulo"=>"Inicio de sesión"];
        $this->view('index',$datos);
    }

    public function actionRegistro(){
        $datos = ["titulo" => "Registrese" ];
        $this->view('registro',$datos);
    }

    public function actionError(){
        $datos = ["titlo" => 'error'];
        $this->view('error',$datos);

    }



}

?>