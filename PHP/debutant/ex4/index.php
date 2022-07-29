<?php

$texte ="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, 
dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,enim est eleifend mi,
 non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.Pellentesque congue. Ut in risus volutpat libero pharetra tempor.
  Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit
odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede 
pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit. Ut velit mauris, egestassed, gravida nec, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin.
 Fusce varius, ligula non tempus aliquam, nunc turpisullamcorper nibh, in tempus sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. vitae 
elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula.Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, 
congue eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue nonelementum posuere, metus purus iaculis lectus, et tristique ligula justo vitae magna. Aliquam convallis sollicitudin purus. 
Praesent aliquam, enim atfermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod libero euenim. Nulla nec felis sed leo
 placerat imperdiet. Aenean suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. ettristique ligula justo vitae magna. Aliquam convallis sollicitudin purus. Praesent aliquam, 
 enim at fermentum mollis, ligula massa adipiscing nisl, aceuismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo. Aet tristique ligula justo vitae magna. Aliquam convallis sollicitudin purus. 
 Praesent aliquam, enim at fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem at sapien. Vivamus leo.ACurabitur iaculis, lorem vel rhoncus faucibus, felis magna 
 fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu amet.";

// Etape 1
$debut = substr($texte, 0, 50);
echo $debut."</br></br>";

// Etape 2
$mots = explode(" ", $texte);
$motsDebut = "";
for ($i=0 ; $i<50 ; $i++) {
  $motsDebut .= "&nbsp".$mots[$i];
}
echo $motsDebut."...[Lire la suite] </br></br>";

// Etape 3
$jour = array ("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$mois = array("Janvier","Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

echo $jour[date("N")-1]." ".date("j")." ".$mois[date("m")-1]." ".date("Y");
