<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="modifBase.php" method="post">
            <?php
                include'connect.php';
                $choix = $_POST["id"];
                $donnee = explode(" ", $choix);
                $id = $donnee[0];
                
                
                $requete = "SELECT * FROM produit WHERE id = ".$id;
                $resultat = $connexion->query($requete);
                $liste = $resultat->fetch(PDO::FETCH_ASSOC);


                echo '<fieldset class="form-group border">';
                echo '<legend>Saisissez les nouvelles valeurs de votre fiche article</legend>';
                echo '<div class="form-group"><label for="disabledTectInput">Identifiant</label>';
                echo'<input type="text" name="id" id="disabledTectInput" class="form_control border border-light bg-light text-grey" readonly value="'.$id.'"></div>';
                echo'<div class="form-group"><label for="code">Code</label>';
                echo'<input type="text" id="code" name="code" class="form_control" value="'.$liste["code"].'"></div>';
                echo'<div class="form-group"><label for="designation">Désignation</label>';
                echo'<input type="text" class="form_control" name="designation" id="designation" value="'.$liste["designation"].'"></div>';
                echo'<div class="form-group"><label for="prix">Prix Unitaire</label>';
                echo'<input type="text" class="form_control" name="prix" id="prix" value="'.$liste["prixUnitaire"].'"></div>';
                echo'<div class="form-group"><label for="made">MadeIn</label>';
                echo'<input type="text" class="form_control" name="made" id="made" value="'.$liste["made_in"].'"></div>';
                echo'<button type="submit" class="btn btn-primary">Valider</button>';
                echo'</fieldset>';
            ?>
        </form>
        <a href="index.php">&larr; Retour</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

