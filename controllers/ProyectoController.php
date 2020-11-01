<?php

require_once 'models/proyectomodel';
require_once 'entities/Proyecto.php';
require_once 'models/convocatoriamodel.php';
require_once 'models/estadoproyectomodel.php';

class ProyectoController extends Controller{

    protected $proyectoModel;

    public function __construct(){

    }

    public function actionIndex(){
        $datos = [];
        $this->view();
    }

    public function actionProyectos(){

    }



}



?>