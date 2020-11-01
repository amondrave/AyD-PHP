<?php
class Controller
{

    public function model($model)
    {
        require_once 'models/' .  $model . 'model.php';
        $model = ucfirst($model) . 'Model';
        return new $model();
    }

    public function view($view, $data = [])
    {
        //session_start();

        if (isset($_SESSION['user'])) {

            if (file_exists('views/admin/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/admin/' . $view . '.php';
            } else {
                header('location:' . URL . '');
            }
        } 
        /*
        Se añade la condición  de que si existe la sección de estudiante 
        se lleve a las vistas de este 
        */
        else if(isset($_SESSION['estudiante'])){
            if(file_exists('views/estudiante/' . $view . '.php')){
                foreach($data as $key => $value){
                    $$key = $value;
                }
                echo "<p>hola</p>";
                require_once 'views/estudiante/'. $view . '.php';
            }else{
                require_once 'views/admin/home.php';
            }
        }
        else {
            if (file_exists('views/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/' . $view . '.php';
            } else {
                header('location:' . URL . 'error');
            }
        }
    }
}
