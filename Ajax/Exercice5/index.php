<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 -Ajax</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/20ff68d117.js" crossorigin="anonymous"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="wrapper">
        <h1>Mes clients</h1>
        <div id="form">
            <?php
                include("formAdd.php");
            ?>
        </div>
        <table id="clients" class="table">
            <tr><th>Nom</th><th>Prénom</th><th>Email</th></tr>
            <?php
                include('display.php');
            ?>
        </table>
    </div> 
</body>
</html>