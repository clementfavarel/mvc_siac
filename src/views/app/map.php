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
        <a id="openPopupArtistList" class="filters">
            <img src="assets/icons/users.svg" alt="Artists" class="top_icon" />
        </a>
    </div>

    <div class="map-container" id="map-container">
        <div class="sketchfab-embed-wrapper"> <iframe title="Map Siac" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share width="350" height="800" src="https://sketchfab.com/models/068c42c580764cfbb1e4423cd636c40d/embed?autostart=1&camera=0"> </iframe> </div>
    </div>

    <div class="popup" id="popupArtistList">
        <div class="popup-content rounded-lg">
            <div class="wrapper">
                <button class="btn_close" id="closePopupArtistList"><img src="assets/icons/close.svg" alt="Bouton fermer">
                </button>
                <div class="masonry">


                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>

                    <div class="brick">
                        <div class="content-wrapper">
                            <img src="assets/img/aklarousse/cocotte-barcelone.jpeg" alt="#">
                            <div class="text-container">
                                <h2 class="span">Nom de l'artiste</h2>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="assets/js/tab-bar.js"></script>
    <script>
        function setupPopup(openButtonId, popupId, closeButtonId) {
            const openButton = document.getElementById(openButtonId);
            const popup = document.getElementById(popupId);
            const closeButton = document.getElementById(closeButtonId);

            openButton.addEventListener("click", function() {
                popup.style.display = "flex";
            });

            closeButton.addEventListener("click", function() {
                popup.style.display = "none";
            });
        }

        setupPopup("openPopupArtistList", "popupArtistList", "closePopupArtistList");
    </script>
</body>

</html>