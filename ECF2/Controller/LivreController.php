<?php
include("View/LivreView.php");
include("Model/LivreModel.php");

class LivreController extends Controller{

    public function __construct() {
        $this->view = new LivreView();
        $this->model = new LivreModel();
    }

    public function listAction() {
        $list = $this->model->getList();
        $this->view->displayList($list);
    }

    public function ficheAction(){
        $id = $_POST['livre'];
        $item = $this->model->getItem($id);
        if(isset($item['idUser'])) {
            $emprunteur = "<a href='index.php?table=user&action=fiche&id=".$item['idUser'].">Fiche emprunteur</a>";
        }else {
            $emprunteur = "disponible";
        }
        $this->view->displayFiche($item, $emprunteur);
    }

    public function addAction() {
        $this->view->displayForm("addDB", "", "Ajouter un livre", array("","",""), "", "Ajouter");
    }

    public function updateAction() {
        $id = $_GET['id'];
        $item = $this->model->getItem($id);                   
        $this->view->displayForm("updateDB", $id, "Modification", $item, "", "Modifier");
    }

    public function deleteAction() {
        $id = $_GET['id'];
        $item = $this->model->getItem($id);                   
        $this->view->displayForm("deleteDB", $id, "suppression", $item, "disabled", "Supprimer");
    }

    public function addDBAction() {
        $titre = isset($_POST["nom"])?$_POST["nom"]:null;
        $auteur = isset($_POST["auteur"])?$_POST["auteur"]:null; 
        $result = $this->model->addDB($titre, $auteur);
        if($result) { 
            $list = $this->model->getList();
            $this->view->displayList($list);
        } else {
            $this->view->errorDisplay();
        }
    }

    public function updateDBAction() {
        $id = $_POST["id"];
        $titre = isset($_POST["nom"])?$_POST["nom"]:null;
        $auteur = isset($_POST["auteur"])?$_POST["auteur"]:null;
        $result = $this->model->updateDB($id, $titre, $auteur);
        if($result) { 
            $list = $this->model->getList();
            $this->view->displayList($list);
        } else {
            $this->view->errorDisplay();
        }
    }

    public function deleteDBAction() {
        $id = $_POST["id"];
        $result = $this->model->deleteDB($id);
        if($result) { 
            $list = $this->model->getList();
            $this->view->displayList($list);
        } else {
            $this->view->errorDisplay();
        }
    }

    public function empruntAction(){
        $id = $_GET["id"];
        $list = $this->model->getLivresDispo();
        $this->view->displayListEmprunt($list, $id);
    }


    public function empruntDBAction() {
        $idUser = $_GET['id'];
        $idLivre = $_POST['livre'];
        $result = $this->model->empruntDB($idUser, $idLivre);
        if($result) {
            header("Location : index.php?table=user&action=fiche&id".$idUser);
            exit();
        } else {
            $this->view->errorDisplay();
        }
    }
}