<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan | Mapollon</title>
    <link rel="stylesheet" href="assets/css/map.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
    <script type="importmap">
        {
            "imports": {
            "three": "https://unpkg.com/three@0.160.1/build/three.module.js",
            "three/addons/": "https://unpkg.com/three@0.160.1/examples/jsm/"
            }
        }
</script>
</head>

<body>
    <div class="top-bar">
        <div class="logo"><img src="assets/icons/logo.svg" alt="Map" class="mapollon" /></div>
        <div class="filters">
            <img src="assets/icons/users.svg" alt="Artists" class="top_icon" />
        </div>
    </div>
    <div class="map-container" id="map-container"></div>

    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>
    <script type="module" src="assets/js/map.js"></script>
</body>

</html>