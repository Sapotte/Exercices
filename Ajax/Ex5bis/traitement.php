<?php

    include 'connect.php';
    $action = $_POST['action'];

    if($db) {
        switch($action) {
            case 'add' :
                if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])) {
                    $requete = $db->prepare("INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`) VALUES (NULL, :nom, :prenom, :email);");
                    $requete->bindParam(':nom', $_POST['nom']);
                    $requete->bindParam(':prenom', $_POST['prenom']);
                    $requete->bindParam(':email', $_POST['email']);

                    $resultat = $requete->execute();

                    echo json_encode($resultat);
                }
                break;

            case 'updateDB' :
                if(isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])) {
                    $requete = $db->prepare("UPDATE `clients` SET `nom` = :nom, `prenom` = :prenom, `email` = :email WHERE `id` = :id");
                    $requete->bindParam(':id', $_POST['id']);
                    $requete->bindParam(':nom', $_POST['nom']);
                    $requete->bindParam(':prenom', $_POST['prenom']);
                    $requete->bindParam(':email', $_POST['email']);

                    $resultat = $requete->execute();

                    echo json_encode($resultat);
                }
                break;

            case 'delete' : 
                $requete = $db->prepare("DELETE FROM `clients` WHERE `id` = :id");
                $requete->bindParam(':id', $_POST['id']);

                $resultat =$requete->execute();
                break;
        }
    }