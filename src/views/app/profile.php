<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil | Mapollon</title>
    <link rel="stylesheet" href="assets/css/profile.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<div class="user-banner">
    <h3>Bonjour,</h3>
    <h2><?php echo $userData['user_firstname'] ?></h2>
</div>

<div class="user-infos-section">
    <div class="infos-title">
        <h1>Vos informations</h1>
    </div>
</div>

<div class="user-infos">
    <div class="inputs">
        <input type="text" placeholder="<?php echo $userData['user_lastname'] ?>" readonly>
    </div>

    <div class="inputs">
        <input type="text" placeholder="<?php echo $userData['user_firstname'] ?>" readonly>
    </div>

    <div class="inputs">
        <input type="text" placeholder="<?php echo $userData['user_email'] ?>" readonly>
    </div>

    <div class="inputs">
        <input type="text" placeholder="<?php echo $userData['user_job'] ?>" readonly>
    </div>

    <div class="disconnect">
        <button id="logout-btn"><i class="bi bi-power"></i>Se déconnecter</button>
    </div>

</div>


    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>
</body>

</html>