<!-- login.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | App</title>
    <link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
    <div class="card">
        <h1>Connexion</h1>
        <form action="index.php?action=login" method="post">
            <div class="input-group">
                <label for="user_email">Email</label>
                <input type="email" name="user_email" id="user_email" required />
            </div>
            <div class="input-group">
                <label for="user_pwd">Mot de passe</label>
                <input type="password" name="user_pwd" id="user_pwd" required />
            </div>
            <input class="btn" type="submit" name="submit" value="Me connecter" />
        </form>
        <p class="small">
            Vous êtes nouveau sur l'appli ?<br />
            <a href="index.php?action=register">Créer un compte</a>
        </p>
    </div>
</body>

</html>