<?php

$nombre = mt_rand(0,100);

for($i=0 ; $i<=10 ; $i++) {
    $resultat = $nombre*$i;
  
    if (($i%2)==0) {
        $couleur = "black";
    } else {
        $couleur = "red";
    }  
    
    echo "<p style='color: ".$couleur."'>".$i."*".$nombre."=".$resultat."<p>";
}

