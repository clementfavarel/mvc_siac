<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scan | App</title>
    <link rel="stylesheet" href="assets/css/scan.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script src="assets/js/scan.js" defer></script>
</head>

<body>
    <div class="container">
        <div id="qr-reader"></div>
        <div id="qr-reader-results"></div>
    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>

    <script src="assets/js/tab-bar.js"></script>
</body>

</html>