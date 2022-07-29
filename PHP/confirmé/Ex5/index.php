 
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP2-Ex5</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/20ff68d117.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Code</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Prix Unitaire</th>
                        <th scope="col">Made in</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include"connect.php";

                    $requete = "SELECT * FROM `produit`";
                    $resultat = $connexion->query($requete);
                    $liste = $resultat->fetchAll(PDO::FETCH_ASSOC);

                        foreach($liste as $element) {
                            echo "<tr><th scope='row'>".$element["id"]."</th>";
                            echo "<td>".$element["code"]."</td>";
                            echo "<td>".$element["designation"]."</td>";
                            echo "<td>".$element["prixUnitaire"]."</td>";
                            echo "<td>".$element["made_in"]."</td>";
                            echo "<td><a href=supArticle.php?id=".$element["id"]."><i class='fa-solid fa-trash'></i></a></td><tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
    </html>

}