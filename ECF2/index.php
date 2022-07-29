<?php 

include('Controller/Controller.php');

include("Controller/UserController.php");
include("Controller/LivreController.php");

class Dispatcher {

    public function dispatch() {
        $controller = (isset($_GET['table']))?$_GET['table']:'user';
        $controller = $controller."Controller";

        $action = (isset($_GET['action']))?$_GET['action']:'home';
        $action = $action."Action";

        $my_controller = new $controller();
        $my_controller->$action();
    }
}

$dispatcher = new Dispatcher();
$dispatcher->dispatch();