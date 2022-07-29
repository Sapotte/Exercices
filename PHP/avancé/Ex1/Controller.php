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
                    echo "Vous êtes sur la page d'accueil";
                    break;
                case "list" :
                    echo "Liste";
                    break;
                case "ajout":
                    echo"Formulaire d'ajout d'une fiche utilisateur";
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