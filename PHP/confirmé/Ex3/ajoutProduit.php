<?php
include"connect.php";

$code = $_POST["code"];
$designation = $_POST["designation"];

$requete = "INSERT INTO `produit` (`id`, `code`, `designation`, `prixUnitaire`, `made_in`) VALUES (NULL, '$code', '$designation', '', '');";

$resultat = $connexion->exec($requete);

if($resultat) {
    echo "<p>Vous avez ajouté".$resultat."produit(s)</p>";
    echo "<a href='index.php'> Ajouter une nouveau produit</a>";
} else {
    echo "L'ajout du produit a échoué.";
    echo "<a href='index.php'>Réessayer</a>";
}
