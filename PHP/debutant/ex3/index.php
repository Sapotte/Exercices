<?php

// Etape 1
$genre = array ("Classique", "Jazz", "Pop", "Rock", "Indépendant");
 echo $genre[0]."<br/>".$genre[1]."<br/>".$genre[2]."<br/>".$genre[3]."<br/>".$genre[4]."<br/>";

// Etape 2
$compositeurs = array("classique" => "Mozart",
                      "jazz" => "Amstrong",
                      "pop" => "Bowie",
                      "rock" => "Beatles",
                      "indépendant" => "Les Têtes Raides");

echo "<br/>".$compositeurs["classique"]."<br/>".$compositeurs["jazz"]."<br/>".$compositeurs["pop"]."<br/>".$compositeurs["rock"]."<br/>".$compositeurs["indépendant"]."<br/>";

// Etape 3
$multiCompo["Classique"]["auteur1"] = "Mozart";
$multiCompo["Classique"]["auteur2"] = "Bach";
$multiCompo["Classique"]["auteur3"] = "Mozart";
$multiCompo["Jazz"]["auteur1"] = "Amstrong";
$multiCompo["Pop"]["auteur1"] = "David Bowie";
$multiCompo["Pop"]["auteur2"] = "Iggy Pop";
$multiCompo["Rock"]["auteur1"] = "Beatles";
$multiCompo["Indépendant"]["auteur1"] = "Les Têtes Raides";

echo "</br> Voici les auteurs de musique pop: ". $multiCompo["Pop"]["auteur1"] . ", " . $multiCompo["Pop"]["auteur2"] . ".";

?>