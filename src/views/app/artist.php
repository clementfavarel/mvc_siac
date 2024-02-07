<!-- background différent donc lié à $artworkData['aw_url'] -->
<!-- media peut être mp4 ou mp3 attention à traiter erreurs en fonction de la source -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artiste | Mapollon</title>
    <link rel="stylesheet" href="assets/css/artist.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
    <script src="assets/js/ajax.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="bg" style="background-image: url('assets/img/<?= $artistData['bg_src'] ?>');background-repeat: no-repeat; background-size: cover">
            <header>
                <a class="previous" href="index.php?action=map">
                    <img src="assets/icons/previous.svg" alt="Retour" />
                </a>
                <h3>Stand n°<?= $artistData['num_stand'] ?></h3>
            </header>

            <!-- SECTION PROFIL ARTISTE -->
            <section class="profile">
                <img class="picture" src="assets/img/<?= $artworkData['image_src'] ?>" alt="Photo de <?= $artworkData['title'] ?>" />
                <h2 class="aw-title"><?= $artworkData['title'] ?></h2>
                <h1 class="at-name">de <?= $artistData['pseudo'] ?></h1>
            </section>
            <!-- FIN SECTION PROFIL ARTISTE -->

            <!-- SECTION VIDEO -->
            <section class="video">
                <iframe class="media" src="https://www.youtube.com/embed/<?= $artistData['media_src'] ?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope;" allowfullscreen></iframe>

            </section>
            <!-- FIN SECTION VIDEO -->

            <!-- SECTION CAROUSEL INFOS ARTISTE -->
            <section>
                <div class="separator">
                    <hr class="big">
                    <hr class="small">
                </div>

                <div class="lazy slider" id="adjustableSlider1">
                    <div>
                        <h3>Qui est <?= $artistData['pseudo'] ?> ?</h3>
                        <p><?= $artistData['description1'] ?></p>
                    </div>
                    <div>
                        <h3>Ses ambitions</h3>
                        <p><?= $artistData['description2'] ?></p>
                    </div>
                    <div>
                        <h3>Son travail</h3>
                        <p><?= $artistData['description3'] ?></p>
                    </div>
                </div>


                <div class="message-slide">
                    <p><img alt="astuce" src="assets/icons/lightbulb.svg">Actuce : glissez pour défiler.</p>
                </div>

                <div class="separator">

                    <hr class="small">
                    <hr class="big">
                </div>
            </section>
            <!-- SECTION CAROUSEL INFOS ARTISTE -->

            <!-- SECTION AFFICHAGE OEUVRE GRAND FORMAT -->
            <section class="artwork">
                <h2 class="aw-title"><?= $artworkData['title'] ?></h2>
                <p class="aw-size">Format :<?= $artworkData['size'] ?></p>
                <img class="artwork-img" src="assets/img/<?= $artworkData['image_src'] ?>" alt="<?= $artworkData['image_alt'] ?>" />
            </section>
            <!-- FIN SECTION AFFICHAGE OEUVRE GRAND FORMAT -->

            <!-- SECTION AUDIO IMMERSION -->
            <section id="audio">
                <div class="message-immersion">
                    <p>Immergez-vous dans l'oeuvre...</p>
                </div>
                <audio src="assets/img/<?= $artistData['audio'] ?>" controls controlsList="nodownload" preload="auto">
                    Votre navigateur ne semble pas supporter ce fichier.
                </audio>
            </section>
            <!-- FIN SECTION AUDIO IMMERSION -->

            <!-- SECTION RESSENTI VISITEUR -->
            <section class="feedback">
                <h2>Et vous ?</h2>
                <p>Certains font part à l’artiste d’un ressenti de nostalgie, d’apaisement ou encore d’espoir face au
                    tableau, d’autres font référence aux univers de science-fiction ou encore aux romans de George
                    Orwell.</p>
                <h3>Que ressentez-vous fasse à cette oeuvre ?</h3>
                <div class="textarea-container">
                    <textarea placeholder="Taper du texte"></textarea>
                </div>
            </section>
            <!-- FIN SECTION RESSENTI VISITEUR -->


            <div class="anecdote"></div>
            <h2 class="aw-title">ses oeuvres</h2>

            <section class="lazy slider" id="adjustableSlider2">
                <div class="see-also">
                    <img class="artworks-img" src="<?= $artistData['img_1'] ?>" alt="" />
                    <h2>Lilith</h2>
                </div>
                <div class="see-also">
                    <img class="artworks-img" src="<?= $artistData['img_2'] ?>" alt="" />
                    <h2>La venus verte</h2>
                </div>
            </section>

            <div class="floating-button">
                <button id="add-like-btn"><img src="assets/icons/heart.svg" alt="heart"></button>
            </div>

        </div>
    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/js/tab-bar.js"></script>
    <script>
        // Attendre que le document soit prêt
        $(document).ready(function() {
            // Sélectionner le conteneur du slider
            const sliderContainer = $("#adjustableSlider1");

            // Initialiser le slider avec Slick Carousel
            sliderContainer.slick({
                infinite: true,
                onInit: function() {
                    adjustSliderHeight();
                }
            });

            // Écouter l'événement afterChange
            sliderContainer.on('afterChange', function(event, slick, currentSlide) {
                // Réajuster la hauteur du conteneur du slider avec une animation
                adjustSliderHeight();
            });

            // Fonction pour ajuster la hauteur du conteneur du slider
            function adjustSliderHeight() {
                // Obtenir la hauteur de la slide actuelle
                let currentSlideHeight = sliderContainer.find('.slick-current').height();

                // Appliquer la hauteur au conteneur du slider avec une animation
                sliderContainer.height(currentSlideHeight);
            }

            // Sélectionner le conteneur du second slider
            const sliderContainer2 = $("#adjustableSlider2");

            sliderContainer2.slick({
                infinite: true
            });
        });
    </script>
</body>

</html>