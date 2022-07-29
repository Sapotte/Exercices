<?php
include("View/UserView.php");
include("Model/UserModel.php");

class UserController extends Controller{

    public function __construct() {
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    public function homeAction() {
        $this->view->displayHome();
    }

    public function listAction() {
        $list = $this->model->getList();
        $this->view->displayList($list);
    }

    public function ficheAction() {
        $id = isset($_POST['user'])?$_POST['user']:$_GET['id'];
        $item = $this->model->getItem($id);
        $livre = $this->model->getLivre($id);
        $this->view->displayFiche($item, $livre);
    }

    public function addAction() {
        $this->view->displayForm("addDB", "", "Ajouter un utilisateur", array("", "","",""), "", "Ajouter");
    }

    public function updateAction() {
        $id = $_GET['id'];
        $item = $this->model->getItem($id);  
        $livre = $this->model->getLivre($id);                 
        $this->view->displayForm("updateDB", $id, "Modifier l'utilisateur", $item, "", "Modifier");
    }

    public function deleteAction() {
        $id = $_GET['id'];
        $item = $this->model->getItem($id);                   
        $this->view->displayForm("deleteDB", $id, "Supprimer l'utilisateur", $item, "disabled", "Supprimer");
    }

    public function addDBAction() {
        $nom = isset($_POST["nom"])?$_POST["nom"]:null;
        $prenom = isset($_POST["prenom"])?$_POST["prenom"]:null; 
        $mail = isset($_POST["mail"])?$_POST["mail"]:null; 
        $result = $this->model->addDB($nom, $prenom, $mail);
        if($result) { 
            $list = $this->model->getList();
            $this->view->displayList($list);
        } else {
            $this->view->errorDisplay();
        }
    }

    public function updateDBAction() {
        $id = $_POST["id"];
        $nom = isset($_POST["nom"])?$_POST["nom"]:null;
        $prenom = isset($_POST["prenom"])?$_POST["prenom"]:null;
        $mail = isset($_POST["mail"])?$_POST["mail"]:null;
        $result = $this->model->updateDB($id, $nom, $prenom, $mail);
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
    
    public function restitAction() {
        $idLivre = $_GET['idLivre'];
        $idUser =$_GET['idUser'];
        $result = $this->model->restitDB($idLivre);
        if($result) {
            $item = $this->model->getItem($idUser);
            $livre = $this->model->getLivre($idUser);
            $this->view->displayFiche($item, $livre);
        }
    }
}