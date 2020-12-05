<?php

require_once 'models/proyectoprofesormodel.php';

class AdminController extends Controller
{

    protected $proyectoProfesorModel;

    public function __construct()
    {
        $this->proyectoProfesorModel = $this->model('proyectoprofesor');
    }

    public function actionIndex()
    {
        $datos = ['mensaje' => 'bienvenido'];
        $this->view('correcto', $datos);
    }

    public function actionAsginar()
    {
        $profesor = $_GET['profesor'];
        $proyecto = $_GET['proyecto'];
        echo $proyecto;
        echo $profesor;
        if ($profesor != null && $proyecto != null) {
            if ($this->proyectoProfesorModel->insertar($profesor, $proyecto)) {
                $this->actionDocente();
            } else {
                $dataError = [
                    'titulo' => 'Error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error'
                ];
                $this->view('error', $dataError);
            }
        } else {
            $dataError = [
                'titulo' => 'Error',
                'mensaje' => 'Lo sentimos ha ocurrido un error'
            ];
            $this->view('error', $dataError);
        }
    }
}
