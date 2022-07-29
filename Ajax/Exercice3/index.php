<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 -AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <form name="formConnexion" method="post" action="#">
        <div>
            <label for="id">Identifiant</label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <button type="submit">Se connecter</button>
    </form>
    <div id="contenu"></div>
    
</body>
</html>