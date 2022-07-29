<?php

class UserModel extends Model{
   
    public function getList() {
        $requete = "SELECT * from emprunteur;";
        $result = $this->connection->query($requete);

        $list= array();
        if($result) {
            $list = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $list;
    }


    public function getItem($id) {
        $requete = $this->connection->prepare('SELECT * from emprunteur WHERE idUser=:id');
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        $item =array();
        if($result) {
            $item = $requete->fetch(PDO::FETCH_ASSOC);
        }

        return $item;
    }

    public function getLivre($id) {
        $requete = $this->connection->prepare('SELECT * from livre WHERE idUser = :id');
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        $livre =array();
        if($result) {
            $livre = $requete->fetchAll(PDO::FETCH_ASSOC);
        }

        return $livre;
    }
    public function addDB($nom, $prenom, $mail){
        $requete = $this->connection->prepare("INSERT INTO `emprunteur` (`idUser`, `nomUser`, `prenomUser`, `mailUser`) VALUES (NULL, :nom, :prenom, :mail);");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':mail', $mail);

        $result = $requete->execute();

        return $result;
    }

    public function updateDB($id, $nom, $prenom, $mail) {
        $requete = $this->connection->prepare ("UPDATE emprunteur  SET nomUser = :nom, prenomUser = :prenom, mailUser = :prenom WHERE idUser = :id");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':mail', $mail);
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }

    public function deleteDB($id) {
        $requete = $this->connection->prepare ("DELETE FROM emprunteur  WHERE idUser = :id");
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }

    public function restitDB($id) {
        $requete = $this->connection->prepare ("UPDATE livre  SET idUser = NULL, dateEmprunt = NULL WHERE idLivre = :id");
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }
}

