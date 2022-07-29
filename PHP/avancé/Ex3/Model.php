<?php
class Model {
    const SERVER = "sqlprive-pc2372-001.privatesql.ha.ovh.net";
    const USER = "cefiidev1236";
    const PASSWORD = "2aD9k7Xm";
    const BASE = "cefiidev1236";

    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host=".self::SERVER.";dbname=".self::BASE, self::USER, self::PASSWORD);
        }
     catch (Exception $e)
        {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    // Recuperation BD
    public function getList() {
        $requete = "SELECT * from `user`;";
        $result = $this->connection->query($requete);

        $list= array();
        if($result) {
            $list = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $list;
    }

    // Récupération item BD
    public function getItem($id) {

        $requete = $this->connection->prepare ("SELECT nom, prenom, ville from user WHERE id=:id");
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        $item =array();
        if($result) {
            $item = $requete->fetch(PDO::FETCH_NUM);
        }

        return $item;
    }

    // Ajout item BD
    public function addDB() {
        $nom = isset($_POST["param0"])?$_POST["param0"]:null;
        $prenom = isset($_POST["param1"])?$_POST["param1"]:null;
        $ville = isset($_POST["param2"])?$_POST["param2"]:null;

        $requete = $this->connection->prepare("INSERT INTO `user` (`id`, `nom`, `prenom`, `ville`) VALUES (NULL, :nom, :prenom, :ville);");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':ville', $ville);

        $result = $requete->execute();

        return $result;
    }

    // Modification d'un item BD
    public function updateDB() {
        $id = $_GET["id"];
        $nom = isset($_POST["param0"])?$_POST["param0"]:null;
        $prenom = isset($_POST["param1"])?$_POST["param1"]:null;
        $ville = isset($_POST["param2"])?$_POST["param2"]:null;

        $requete = $this->connection->prepare ("UPDATE user  SET nom = :nom, prenom = :prenom, ville = :ville WHERE id = :id");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':ville', $ville);
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }

    // Suppression d'un item BD
    public function deleteDB() {
        $id = $_GET["id"];

        $requete = $this->connection->prepare ("DELETE FROM user  WHERE id = :id");
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }
}