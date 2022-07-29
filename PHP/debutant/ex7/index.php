<?php

// Etape 1
function division($nbr1, $nbr2) {
    if($nbr2!=0) {
        $resultat = $nbr1/$nbr2;
        $resultat = number_format($resultat, 2);
        return $resultat;
    }
    if($nbr2==0){
        $resultat = 0;
        return $resultat;
    }
}

// Etape 2
$nombre1 = mt_rand(0, 10);
$nombre2 = mt_rand(0, 10);

$result = division($nombre1, $nombre2);

echo "Le résultat de la division de ".$nombre1." par ".$nombre2." est de ".$result;



