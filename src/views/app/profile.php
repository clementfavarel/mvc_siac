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
        <?php
        $inputData = array(
            array('type' => 'text', 'name' => 'user_firstname', 'value' => $userData['user_firstname']),
            array('type' => 'text', 'name' => 'user_lastname', 'value' => $userData['user_lastname']),
            array('type' => 'text', 'name' => 'user_job', 'value' => $userData['user_job']),
            array('type' => 'email', 'name' => 'user_email', 'value' => $userData['user_email']),
            array('type' => 'password', 'name' => 'user_pwd', 'placeholder' => 'Nouveau mot de passe'),
            array('type' => 'password', 'name' => 'user_pwd_confirm', 'placeholder' => 'Confirmer le mot de passe')
        );

        foreach ($inputData as $input) {
            echo '<div class="inputs">';
            if ($input['type'] === 'password') {
                echo '<input type="' . $input['type'] . '" name="' . $input['name'] . '" placeholder="' . $input['placeholder'] . '">';
            } else {
                echo '<input type="' . $input['type'] . '" name="' . $input['name'] . '" value="' . $input['value'] . '">';
            }
            echo '</div>';
        }
        ?>

        <div class="save">
            <button type="submit"><span><img src="assets/icons/save.svg">Sauvegarder</span></button>
        </div>
    </form>


    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>

</body>

</html>