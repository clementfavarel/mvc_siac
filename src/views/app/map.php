<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan | Mapollon</title>
    <link rel="stylesheet" href="assets/css/map.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
</head>

<body>
    <div class="top-bar">
        <div class="logo"><img src="assets/icons/logo.svg" alt="Map" class="mapollon" /></div>
        <a class="filters">
            <img src="assets/icons/users.svg" alt="Artists" class="top_icon" />
        </a>
    </div>
    <div class="map-container" id="map-container"></div>

    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>
</body>

</html>