<?php

define('SERVER' , "sqlprive-pc2372-001.privatesql.ha.ovh.net");
define('USER' , "cefiidev1236");
define('PASSWORD' , "2aD9k7Xm");
define('BASE' , "cefiidev1236");

$connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);

$id = isset($_POST['id'])?$_POST['id']:null;
$mdp = isset($_POST['mdp'])?$_POST['mdp']:null;

$requete = $connexion->prepare("SELECT * FROM `connexion` WHERE identifiant=:id");
$requete->bindParam(':id', $id);
$requete->execute();

$userInfo = $requete->fetch(PDO::FETCH_ASSOC);

if ($userInfo&&($userInfo['mdp']==$mdp)) {
        echo 'Vous êtes maintenant connecté(e) '.$userInfo['nom']." ".$userInfo['prenom'];
    } else if ($userInfo&&($userInfo['mdp']!=$mdp)) {
        echo 'Mot de passe incorrect';
    } else {
    echo "Identifiant non reconnu";
}


