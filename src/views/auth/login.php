<!-- login.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion | Mapollon</title>
    <link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
    <a href="index.php" class="previous">
        <img src="assets/icons/previous.svg" alt="<=" />
    </a>
    <div class="container">
        <h1>Connexion</h1>
        <form action="index.php?action=login" method="post">
            <div class="input-group">
                <label for="user_email">Email</label>
                <input type="email" name="user_email" id="user_email" />
            </div>
            <div class="input-group">
                <label for="user_pwd">Mot de passe</label>
                <input type="password" name="user_pwd" id="user_pwd" />
            </div>

            <?php if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])): ?>
                <div class="error-box">
                    <p class="error-message"><img src="assets/icons/alert-triangle.svg" alt="alert-triangle"><?php echo $_SESSION['error_message']; ?></p>
                </div>
                <?php unset($_SESSION['error_message']); // Clear the error message after displaying ?>
            <?php endif; ?>

            <input class="btn primary center" type="submit" value="Se connecter" />
        </form>

    </div>
</body>

</html>