<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil | Mapollon</title>
    <link rel="stylesheet" href="assets/css/profile.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
</head>

<body>

    <div class="user-banner">
        <h2>Bonjour, <?php echo $userData['user_firstname'] ?></h2>
        <a href="index.php?action=logout"><img src="assets/icons/power.svg"></a>
    </div>

    <div class="user-infos-section">
        <div class="infos-title">
            <h1>Vos informations</h1>
        </div>
    </div>

    <form class="user-form" method="post" action="index.php?action=update_user">
        <div class="inputs">
            <input name="user_firstname" type="text" value="<?php echo $userData['user_firstname'] ?>">
        </div>

        <div class="inputs">
            <input name="user_lastname" type="text" value="<?php echo $userData['user_lastname'] ?>">
        </div>

        <div class="inputs">
            <input name="user_email" type="text" value="<?php echo $userData['user_email'] ?>">
        </div>

        <div class="inputs">
            <input name="user_job" type="text" value="<?php echo $userData['user_job'] ?>">
        </div>

        <div class="inputs">
            <input name="user_pwd" type="password" placeholder="Nouveau mot de passe">
        </div>

        <div class="inputs">
            <input name="user_pwd_confirm" type="password" placeholder="Confirmation du nouveau mot de passe">
        </div>

        <div class="save">
            <button type="submit"><span><img src="assets/icons/save.svg">Sauvegarder</span></button>
        </div>

    </form>


    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>

</body>

</html>