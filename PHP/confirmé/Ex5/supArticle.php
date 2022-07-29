<?php
    include"connect.php";

    $id=$_GET["id"];

    $requete = "DELETE FROM produit WHERE id='$id'";
    $resultat = $connexion->exec($requete);

    if($resultat) {
        echo "Article supprimé";
    } else {
        echo "La suppression de l'article a échoué.";
    }

    echo "</br><a href='index.php'>Revenir à l'accueil</a>";