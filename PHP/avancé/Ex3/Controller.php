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
                    $list = $this->model->getList();
                    $this->view->displayListe($list);
                    break;
                case "ajout":
                    $this->view->displayForm("addDB", "Ajout d'un utilisateur", array("", "", ""), "", "Ajouter","");
                    break;
                case "modif": 
                    $id = $_GET["id"];
                    $item = $this->model->getItem($id);                   
                    $this->view->displayForm("updateDB", "Modification de la fiche utilisateur", array($item[0], $item[1], $item[2]), "", "Modifier", $id );
                    break;
                case "suppression":
                    $id = $_GET["id"];
                    $item = $this->model->getItem($id);                    
                    $this->view->displayForm("deleteDB", "Suppression d'une fiche utilisateur", array($item[0], $item[1], $item[2]), "disabled", "Supprimer", $id);
                    break;
                case "addDB" : 
                    $this->model->addDB();
                    $list = $this->model->getList();
                    $this->view->displayListe($list);
                    break;
                case "updateDB":
                    $this->model->updateDB();
                    $list = $this->model->getList();
                    $this->view->displayListe($list);
                    break;
                case "deleteDB" : 
                    $this->model->deleteDB();
                    $list = $this->model->getList();
                    $this->view->displayListe($list);
                    break;
            }
    }

}