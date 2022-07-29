<?php

    include("connect.php");

    if($connexion) {
        $action = $_GET['action'];

        switch($action) {
            case 'add' :
                if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])) {
                    $requete = $connexion->prepare("INSERT INTO `clients` (`id`, `nom`, `prenom`, `email`) VALUES (NULL, :nom, :prenom, :email);");
                    $requete->bindParam(':nom', $_POST['nom']);
                    $requete->bindParam(':prenom', $_POST['prenom']);
                    $requete->bindParam(':email', $_POST['email']);

                    $resultat = $requete->execute();

                    echo json_encode($resultat);
                }
                break;
            case 'delete' : 
                $requete = $connexion->prepare("DELETE FROM `clients` WHERE `id` = :id");
                $requete->bindParam(':id', $_POST['id']);

                $resultat =$requete->execute();
                
                echo json_encode($resultat);
                break;
            case 'update' :
                if(isset($_POST['id'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])) {
                    $requete = $connexion->prepare("UPDATE `clients` SET `nom` = :nom, `prenom` = :prenom, `email` = :email WHERE `id` = :id;");
                    $requete->bindParam(':id', $_POST['id']);
                    $requete->bindParam(':nom', $_POST['nom']);
                    $requete->bindParam(':prenom', $_POST['prenom']);
                    $requete->bindParam(':email', $_POST['email']);

                    $resultat = $requete->execute();

                    echo json_encode($resultat);
                }
                break;
        }
    } else {
        echo "Connexion à la base de donnée impossible";
    }