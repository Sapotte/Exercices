<?php

if(file_exists("connect.php")){
    include"connect.php";
}

$requete = "SELECT * FROM `produit`";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach($liste as $element) {
    echo "<li>Produit ".$element["id"]." : ";
    echo "<ul><li>code : ".$element["code"]."</li>";
    echo "<li>désignation : ".$element["designation"]."</li></ul></li>";
}
echo "</ul>";