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
        <div class="filters">
            <img src="assets/icons/sliders.svg" alt="Filter" class="top_icon" />
        </div>
    </div>
    <div class="sketchfab-embed-wrapper"> <iframe title="Map Siac" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="350" height="800" src="https://sketchfab.com/models/068c42c580764cfbb1e4423cd636c40d/embed?autostart=1&camera=0"> </iframe> </div>
    <!--
        Onglet qui contient l'image de la carte sur laquelle doivent s'afficher les icônes de 'pin' `assets/icons/marker.svg`
        ils doivent être cliquables et au click, afficher un pop up avec les informations de l'oeuvre dont l'id est pointé / contenu par le pin
    -->
    <div class="map-container" id="map-container"></div>

    <?php
    if (isset($_SESSION['user'])) {
        include 'assets/includes/tab-bar.php';
        echo '<script src="assets/js/tab-bar.js"></script>';
    }
    ?>
</body>

</html>