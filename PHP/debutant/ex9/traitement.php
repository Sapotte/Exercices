<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$code = $_POST['code'];
$tel = $_POST['tel'];
$message = $_POST['message'];


if(!is_numeric($tel)){
    $tel = explode(".", "$tel");
    $tel = $tel[0].$tel[1].$tel[2].$tel[3].$tel[4];
}


if((strlen($tel)!=10) || !is_numeric($tel)){
    echo "Le numéro de téléphone est invalide";
} else if(!is_numeric($code) || (strlen($code)!=5)) {
    echo "Le code postal est invalide";
} else {
    $destinataire = "null@null.com";
    $sujet = "Demande de contact";
    $entete = "From:null@null.com\n";
    $entete.= "Content-type:text/html;charset=utf-8\n";
    $message = $nom."</br>".$prenom."</br>".$code."</br>".$tel."</br>".$message."</br>";

    mail($destinataire,$sujet,$message,$entete);
}

