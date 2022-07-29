<?php
include("connect.php");
if ($connexion) {
    $query = "SELECT * FROM `clients` WHERE id=:id";
    $prep = $connexion->prepare($query);
    $prep->bindParam(':id', $_POST['id']);
    $result = $prep->execute();
    if ($result) {
        $resultat = $prep->fetch(PDO::FETCH_ASSOC);
    }            
}

?>

    <form id="myForm">
    <ul>
        <li>
            <input type="hidden" id="id" name="id" value="<?php echo $resultat['id']?>">
        </li>
        <li>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required value="<?php echo $resultat['nom']?>">
        </li>
        <li>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required value="<?php echo $resultat['prenom']?>">
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required value="<?php echo $resultat['email']?>">
        </li>
        <li>
            <button id="updateDB">Modifier un client</button>
            <button id="cancel">Annuler</button>   
            <div id="reponse"></div>
        </li>
    </ul>
    </form> 
