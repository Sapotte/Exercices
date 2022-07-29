<?php

session_start();

// Nombres d'articles dans le panier
if((!isset($_SESSION['nombreArticlesPanier'])) || (strlen($_SESSION['nombreArticlesPanier'])==0)) {
    $_SESSION['nombreArticlesPanier'] = 1;
} else {
    $_SESSION['nombreArticlesPanier']++;
}

// Détail du panier
    if(isset($_GET["poussin"])) {
        if(!isset($_SESSION["nbrPoussins"])) {
            $_SESSION["nbrPoussins"] = 1;
        } else{
            $_SESSION["nbrPoussins"]++;
        }
    }
    if(isset($_GET["coq"])) {
        if(!isset($_SESSION["nbrCoqs"])) {
            $_SESSION["nbrCoqs"] = 1;
        } else{
            $_SESSION["nbrCoqs"]++;
        }
    }
    if(isset($_GET["poule"])) {
        if(!isset($_SESSION["nbrPoules"])) {
            $_SESSION["nbrPoules"] = 1;
        } else{
            $_SESSION["nbrPoules"]++;
        }
    }
    if(isset($_GET["poulet"])) {
        if(!isset($_SESSION["nbrPoulets"])) {
            $_SESSION["nbrPoulets"] = 1;
        } else{
            $_SESSION["nbrPoulets"]++;
        }
    }



// Vider le panier
if ($_GET['vider']==1) {
    $_SESSION['nombreArticlesPanier'] = 0;
    $_SESSION['nbrPoussins'] = 0;
    $_SESSION['nbrCoqs'] = 0;
    $_SESSION['nbrPoules'] = 0;
    $_SESSION['nbrPoulets'] = 0;
}

header("Location: panier.php");
    exit;
