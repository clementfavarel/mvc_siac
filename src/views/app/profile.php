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
    <header class="top-bar">
        <h1><?php echo $userData['user_firstname'] ?></h1>
        <a href="index.php?action=logout" class="logout"><img src="assets/icons/log-out.svg" alt="logout icon" /></a>
    </header>

    <div class="profile-card">
        <div class="profile-info">
            <img src="assets/icons/profile-on.svg" alt="user icon" class="profile-pic" />
            <?php
            $infoItems = [
                'Nom' => $userData['user_lastname'],
                'Prénom' => $userData['user_firstname'],
                'Email' => "<a href='mailto:" . $userData['user_email'] . "'>" . $userData['user_email'] . "</a>",
                'Profession' => $userData['user_job'],
                'Date de naissance' => $userData['user_birth_date']
            ];
            foreach ($infoItems as $label => $value) {
            ?>
                <div class="info-group">
                    <p class="label"><?php echo $label ?> :</p>
                    <p class="value"><?php echo $value ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>
</body>

</html>