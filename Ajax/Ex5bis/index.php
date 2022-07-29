<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5- Ajax</title>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/20ff68d117.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
           </head>
<body>
    <div class="container">
        <h1 class="text-center">Mes clients</h1>
        <form id="myForm" class="form">
        <ul class="list-group list-unstyled">
            <li class="list-item">
                <input type="hidden" class="form-control" name="id" id="id">
            </li>
            <li class="list-item">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" required>
            </li>
            <li class="list-item">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" required>
            </li>
            <li class="list-item">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </li>
            <li class="list-item mt-2">
                <button type="button" id="add" class="button-dark">Ajouter</button>
                <button type="button" id="updateDB" class="button-dark" style="display: none;">Modifier</button>
                <button type="button" id="cancel" class="button-dark" style="display: none;">Annuler</button>
            </li>
            <div id="succes" class="text-center" style="display: none;">
                <span class='succes'></span>
                <button type='button' class='close'><i class='fa-solid fa-xmark'></i></button>
            </div>
            <div id="error" class="text-center" style="display: none;">
                <span class='error'>Une erreur est survenue</span>
                <button type='button' class='close'><i class='fa-solid fa-xmark'></i></button>
            </div>
        </ul>
        </form>
        <table id="clients" class="table table-striped">
            <?php
                include 'display.php';
            ?>
        </table>
    </div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>