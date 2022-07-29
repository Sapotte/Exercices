<?php

class LivreModel extends Model{
   
    public function getList() {
        $requete = "SELECT * from livre;";
        $result = $this->connection->query($requete);

        $list= array();
        if($result) {
            $list = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $list;
    }

    public function getItem($id) {
        $requete = $this->connection->prepare('SELECT * from livre WHERE idLivre=:id');
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        $item =array();
        if($result) {
            $item = $requete->fetch(PDO::FETCH_ASSOC);
        }

        return $item;
    }

    public function addDB($titre, $auteur){
        $requete = $this->connection->prepare("INSERT INTO `livre` (`idLivre`, `nomLivre`, `auteur`, `dateEmprunt`, `idUser`) VALUES (NULL, :titre, :auteur, NULL, NULL);");
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':auteur', $auteur);

        $result = $requete->execute();

        return $result;
    }

    public function updateDB($id, $titre, $auteur) {
        $requete = $this->connection->prepare ("UPDATE livre  SET nomLivre = :titre, auteur = :auteur WHERE id = :id");
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':auteur', $auteur);
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }

    public function deleteDB($id) {
        $requete = $this->connection->prepare ("DELETE FROM emprunteur  WHERE id = :id");
        $requete->bindParam(':id', $id);

        $result = $requete->execute();

        return $result;
    }

    public function getLivresDispo() {
        $requete = "SELECT * from livre WHERE idUser IS NULL;";
        $result = $this->connection->query($requete);

        $list= array();
        if($result) {
            $list = $result->fetchAll(PDO::FETCH_ASSOC);
        }
        return $list;
    }

    public function empruntDB($idUser, $idLivre){
        $requete = $this->connection->prepare ("UPDATE livre  SET idUser = :idUser, dateEmprunt = DATE( NOW()) WHERE idLivre = :id");
        $requete->bindParam(':idUser', $idUser);
        $requete->bindParam(':id', $idLivre);

        $result = $requete->execute();

        return $result;
    }

}

