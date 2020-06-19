<?php

// Clase controladora de las rutas, las cuales son descritas de la siguiente manera:
// Controlador/Metodo/Parametros
class App
{
    //Se define un controlador por defecto, en este caso "HomeController"
    protected $controller = "LoginController";

    //Se define un metodo por defecto, en este caso "actionIndex"
    protected $method = "actionIndex";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Se obtiene el primer elemto del array[0] el cual corresponde al controlador, se pone la primera  en mayuscula y se concatena Controller
        // ejemplo: alumno , se convierte en: AlumnoController
        $controllerName = ucfirst(strtolower($url[0])) . "Controller";

        // Se comprueba si existe el controlador en la carpeta controllers mediante file_exists()

        if (file_exists("controllers/" . $controllerName . ".php")) {

            // Se asigna el controlador a la variable global
            $this->controller = $controllerName;

            // Se vacia la variable (elimina)
            unset($url[0]);
        }

        // Se requiere el controlador
        require "controllers/" . $this->controller . ".php";

        // Se crea una instancia del controlador
        $this->controller = new $this->controller;

        // Valida si existe un metodo, el cual corresponde a array[1]
        if (isset($url[1])) {

            // Se añade el prefijo action y se convierte a mayuscula la primera letra
            $methodName = "action" . ucfirst(strtolower($url[1]));

            // Comprueba si el metodo existe en el controlador seleccionado, de lo contrario seguira siendo index el metodo por defecto
            if (method_exists($this->controller, $methodName)) {

                //Se asigna el metodo a la variable global
                $this->method = $methodName;

                //Se vacia la variable (elimina)
                unset($url[1]);
            }
        }

        // al haber vaciado del array el controlador y metodo, solo quedan los parametros.
        // los cuales de convierten en un array y es asignado a la variable global $params[]
        $this->params[] = $url ? array_values($url) : $this->params;

        //hacemos un llamado al metodo del controlador indicados en las variables globales y pasamos los parametros si el metodo los necesita
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Obtiene lo escrito en la url, elimina espacios en blanco y hace un split separando por "/"
    // ejemplo 
    // alumno/editar/12
    // retorna $url = ["alumno", "editar", "12"];
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        } else {
            return array("index");
        }
    }
}
