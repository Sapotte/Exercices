<?php

include("Model.php");
include("View.php");

class Controller {
    private $model;
    private $view;

    public function __construct(){
        $this-> model = new Model();
        $this->view = new View();
    }
    

    public function dispatch() {
        $page = (isset($_GET["page"]))?$_GET["page"]:"home";

            switch ($page) {
                case "home" :
                    $this->view->displayHome();
                    break;
                case "list" :
                    $this->view->displayListe();
                    break;
                case "ajout":
                    $this->view->displayAjout();
                    break;
                case "modif":
                    echo"Modification d'une fiche utilisateur";
                    break;
                case "suppression":
                    echo "Supression d'une fiche utilisateur";
                    break;
            }
    }


}