<!-- register.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription | App</title>
    <link rel="stylesheet" href="assets/css/register.css" />
</head>

<body>
    <div class="card">
        <h1>Inscription</h1>
        <form action="index.php?action=register" method="post">
            <div class="input-group">
                <label for="user_name">Nom d'utilisateur</label>
                <input type="text" name="user_name" id="user_name" required />
            </div>
            <div class="input-group">
                <label for="user_email">Email</label>
                <input type="email" name="user_email" id="user_email" required />
            </div>
            <div class="input-group">
                <label for="user_pwd">Mot de passe</label>
                <input type="password" name="user_pwd" id="user_pwd" required />
            </div>
            <div class="input-group">
                <label for="user_pwd_repeat">Confirmer le mot de passe</label>
                <input type="password" name="user_pwd_repeat" id="user_pwd_repeat" required />
            </div>
            <input class="btn" type="submit" name="submit" value="Créer mon compte" />
        </form>
        <p class="small">
            Vous possédez déjà un compte ?<br />
            <a href="index.php?action=login">Connectez-vous</a>
        </p>
    </div>
</body>

</html>