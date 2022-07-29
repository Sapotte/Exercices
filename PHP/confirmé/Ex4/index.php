<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 - Ex4 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="modifierProduit.php" method="post">
            <fieldset class="form-group border">
                <legend>Sélectionnez votre fiche article</legend>
                <div class="form-group">
                    <label for="id">Identifiant</label>
                    <select name="id" id="id" class="custom-select">
                        <?php
                            include"connect.php";
                            $requete = "SELECT * FROM `produit`";
                            $resultat = $connexion->query($requete);
                            $liste = $resultat->fetchAll(PDO::FETCH_ASSOC);
                            foreach($liste as $element) {
                                echo "<option value=".$element["id"].">".$element["id"]." ".$element["code"]."  ".$element["designation"]."</option>";
                            }
                            echo "</ul>";

                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </fieldset>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>