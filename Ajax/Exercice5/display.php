<?php

include("connect.php");

if($connexion) {
    $requete = "SELECT * FROM `clients`";
    $prep = $connexion->prepare($requete);
    $result = $prep->execute();
    if($result) {
        $resultat = $prep->fetchAll(PDO::FETCH_ASSOC);
        $output ="";
        foreach($resultat as $row) {
            $output .= "<tr>";
            $output .= "<td>".$row["nom"]."</td>";
            $output .= "<td>".$row["prenom"]."</td>";
            $output .= "<td>".$row["email"]."</td>";
            $output .= "<td><button type='button' class='update' name='update' value=".$row["id"]."><i class='fa-solid fa-pen'></i></button><button type='button' class='delete' name='delete' value=".$row["id"]."><i class='fa-solid fa-trash'></i></button>";
            $output .= "</tr>";
        }
        echo $output;
    }
} else {
    echo "Erreur de connexion à la base de données";
}