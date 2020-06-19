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
        session_start();

        if (isset($_SESSION['user'])) {

            if (file_exists('views/farmacia/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/farmacia/' . $view . '.php';
            } else {
                header('location:' . URL . 'productos');
            }
        } else {
            if (file_exists('views/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/' . $view . '.php';
            } else {
                header('location:' . URL . 'login');
            }
        }
    }
}
