<?php
    $id = $_POST["id"];
    $code = $_POST["code"];
    $designation = $_POST["designation"];
    $prix = $_POST["prix"];
    $madeIn = $_POST["made"];

   include"connect.php";
   $requete = "UPDATE produit  SET code = '$code', designation = '$designation', prixUnitaire = '$prix' , made_in = '$madeIn' WHERE id = '$id '";

   $resultat = $connexion->exec($requete);

   if($resultat){
       echo "Produit modifié</br>";
   } else {
       echo "La modification du produit a échoué</br>";
   }

   echo "<a href=index.php>&larr; Revenir à l'accueil</a>";
   


