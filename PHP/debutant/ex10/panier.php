<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="d-flex flex-row flex-wrap text-center ">
        <article class="col-12 col-sm-6 col-lg-3 align-self-start mt-3">
            <figure>
                <figcaption>Poussin</figcaption>
                <img class="img rounded-circle" src="images/poussin.jpg" alt="poussin">
            </figure>
            <h3>5€</h3>
            <a href="modifierPanier.php?poussin=1">Ajouter au panier</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 align-self-start mt-3">
            <figure>
                <figcaption>Coq</figcaption>
                <img class="img rounded-circle" src="images/coq.jpg" alt="coq">
            </figure>
            <h3>8€</h3>
            <a href="modifierPanier.php?coq=1">Ajouter au panier</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 align-self-start mt-3">
            <figure>
                <figcaption>Poule</figcaption>
                <img class="img rounded-circle" src="images/poule.jpg" alt="poule">
            </figure>
            <h3>8€</h3>
            <a href="modifierPanier.php?poule=1">Ajouter au panier</a>
        </article>
        <article class="col-12 col-sm-6 col-lg-3 align-self-start mt-3">
            <figure>
                <figcaption>Poulet</figcaption>
                <img class="img rounded-circle" src="images/poulet.jpg" alt="poulet">
            </figure>
            <h3>7€</h3>
            <a href="modifierPanier.php?poulet=1">Ajouter au panier</a>
        </article>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-12 col-sm-6 col-lg-3 text-center border">
            <h2>Panier</h2>
            <div>
                <?php 
                    $prixPoussin = 0;
                    $prixCoq= 0;
                    $prixPoulet= 0;
                    $prixPoule= 0;

                    if(!isset($_SESSION['nombreArticlesPanier']) || $_SESSION['nombreArticlesPanier']==0){
                        echo "Vous n'avez pas d'articles.";
                    } else {
                        echo "<ul style='list-style-type:none'>";

                        if(isset($_SESSION["nbrPoussins"]) && $_SESSION['nbrPoussins']!=0) {
                            $prixPoussin = $_SESSION["nbrPoussins"]*5;
                            echo "<li>".$_SESSION["nbrPoussins"]."x Poussin(s) : ".$prixPoussin." €</li>";
                        }
                        if(isset($_SESSION["nbrCoqs"]) && $_SESSION['nbrCoqs']!=0) {
                            $prixCoq = $_SESSION["nbrCoqs"]*8;
                            echo "<li>".$_SESSION["nbrCoqs"]."x Coq(s) : ".$prixCoq." €</li>";
                        }
                        if(isset($_SESSION["nbrPoules"]) && $_SESSION['nbrPoules']!=0) {
                            $prixPoule = $_SESSION["nbrPoules"]*8;
                            echo "<li>".$_SESSION["nbrPoules"]."x Poule(s) : ".$prixPoule." €</li>";
                        }
                        if(isset($_SESSION["nbrPoulets"]) && $_SESSION['nbrPoulets']!=0) {
                            $prixPoulet = $_SESSION["nbrPoulets"]*7;
                            echo "<li>".$_SESSION["nbrPoulets"]."x Poulet(s) : ".$prixPoulet." €</li>";
                        }
                        
                        echo "</br>Vous avez ".$_SESSION['nombreArticlesPanier']." article(s) dans le panier </br>";
                    }
                    
                    $prixTotal = $prixPoussin+$prixCoq+$prixPoule+$prixPoulet;
                    
                    
                    echo "</br>Prix total : ".$prixTotal." €</br>";
                    echo "</br><button class='btn-dark'>Valider la commande</button>";
                ?>
            <div><a href="modifierPanier.php?vider=1" class="btn-outline-success btn-sm">Vider le panier</a></div>
        </div>
    </div>
    </div>

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/ulg/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>