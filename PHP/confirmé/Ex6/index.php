<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2-Ex6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="traitement.php" method="POST" enctype="multipart/form-data">
            <div class="form-group mt-2">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="com">Commentaires</label>
                <textarea class="form-control" name="com" id="com" cols="30" rows="10"></textarea>
            </div>
            <div class="input-group mt-3">
                <input type="file" id="pj" name="pj" class="form-control w-80">
                <!-- <label for="pj" class="input-group-text">Télécharger</label> -->
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Envoyer</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>