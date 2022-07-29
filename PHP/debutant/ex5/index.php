<?php

$nombre = mt_rand(0, 24);

echo "Il est ".$nombre."h <br/>";

if($nombre<12) {
    echo "matin";
}else {
    echo "après-midi";
}