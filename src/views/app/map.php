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

    <!--
        Onglet qui contient l'image de la carte sur laquelle doivent s'afficher les icônes de 'pin' `assets/icons/marker.svg`
        ils doivent être cliquables et au click, afficher un pop up avec les informations de l'oeuvre dont l'id est pointé / contenu par le pin
    -->
    <div class="map-container"></div>

    <?php include 'assets/includes/tab-bar.php'; ?>

    <script src="assets/js/tab-bar.js"></script>
</body>

</html>