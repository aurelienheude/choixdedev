<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace administrateur</title>

    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <div class="form">
        <h1>Connexion</h1>
        <form action="connexion.php" method="POST">
            <input type="text" name="email" class="form_input" placeholder="Adresse email">
            <input type="password" name="mot_de_passe" class="form_input" placeholder="Mot de passe">
            <input type="submit" name="envoi" class="submit_input">
        </form>
    </div>

</body>
</html>