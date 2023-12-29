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
    <div id="map">
        <img class="map-img" src="assets/img/plan.png" alt="plan" />
    </div>
    <?php include 'assets/includes/tab-bar.php'; ?>

    <script src="assets/js/map.js"></script>
    <script src="assets/js/tab-bar.js"></script>
</body>

</html>