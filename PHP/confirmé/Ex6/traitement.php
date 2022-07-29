<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';

$nom = (isset($_POST['nom']))?$_POST['nom']:"non renseigné";
$prenom = (isset($_POST['prenom']))?$_POST['prenom']:"non renseigné";
$email = (isset($_POST['email']))?$_POST['email']:"non renseigné";
$com = (isset($_POST['com']))?$_POST['com']:"aucun commentaire";


if (isset($_FILES["pj"]) && ($_FILES["pj"]["error"] == 0)) {
    $fichier = $_FILES["pj"]["name"];
    $chemin = $_FILES["pj"]["tmp_name"];
    $resultat = "avec PJ";
} else {
    $resultat = "sans PJ";
}

$sujet = "Envoi email via PHPMailer";
$corps = "<p>Voici la pièce jointe".$fichier."</p><p>".$com."</p><p>Signé : ".$prenom." ".$nom."</p>";


$mail = new PHPMailer();

try {
    $mail->From = $email;
    $mail->FromName = $prenom." ".$nom; 
    $mail->CharSet = 'UTF-8';
    $mail->MsgHTML(nl2br($corps));
    $mail->Subject = $sujet;
    $mail->AddAttachment($chemin,$fichier);

    $mail->Send();
    echo "Message envoyé ".$resultat;

}
catch (Exception $e) {
    echo "Echec de l'envoi du message";
    echo "Erreur : ".$mail->ErrorInfo;
}



