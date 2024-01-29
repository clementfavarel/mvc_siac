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
</head>

<body>
    <div class="container">
        <div class="bg" style="background-image: url('<?= $artistData['bg_src'] ?>')">
            <header>
                <a class="previous" href="index.php?action=map">
                    <img src="assets/icons/previous.svg" alt="Retour" />
                </a>
                <h3>Stand n°<?= $artistData['num_stand'] ?></h3>
            </header>
            <div class="profile">
                <img class="picture" src="assets/img/aklarousse/cocotte-barcelone.JPEG" alt="La Cocotte de Barcelone" />
                <h2 class="aw-title">la cocotte de barcelone</h2>
                <h1 class="at-name"><?= $artistData['pseudo'] ?></h1>
            </div>
            <div class="video">
                <img class="plume-haute" src="<?= $artistData['deco1'] ?>" alt="deco1" />
                <video class="media" controls>
                    <source src="<?= $artistData['media_src'] ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img class="plume-basse" src="<?= $artistData['deco2'] ?>" alt="deco2" />
            </div>
            <div class="separator">
                <hr class="big">
                <hr class="small">
            </div>
            <div class="carroussel">
                <img src="assets/icons/chevron-left.svg" alt="<" />
                <div class="text">
                    <div class="tab1">
                        <h4>Qui est <?= $artistData['pseudo'] ?> ?</h4>
                        <p><?= $artistData['description1'] ?></p>
                    </div>
                    <div class="tab2" style="display:none">
                        <h4>Qui est <?= $artistData['pseudo'] ?> ?</h4>
                        <p><?= $artistData['description2'] ?></p>
                    </div>
                    <div class="tab3" style="display:none">
                        <h4>Qui est <?= $artistData['pseudo'] ?> ?</h4>
                        <p><?= $artistData['description3'] ?></p>
                    </div>
                </div>
                <img src="assets/icons/chevron-right.svg" alt=">" />
            </div>
            <div class="separator">
                <hr class="small">
                <hr class="big">
            </div>
        </div>
        <div class="artwork">
            <h2 class="aw-title"><?= $artworkData['title'] ?></h2>
            <img class="artwork-img" src="<?= $artworkData['image_src'] ?>" alt="<?= $artworkData['image_alt'] ?>" />
        </div>
        <div class="anecdote"></div>
        <h4 class="aw-title">ses oeuvres</h4>
        <div class="see-also">
            <img src="assets/icons/chevron-left.svg" alt="<" />
            <div class="text">
                <div class="tab">
                </div>
            </div>
            <img src="assets/icons/chevron-right.svg" alt=">" />
        </div>
    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>

    <script src="assets/js/tab-bar.js"></script>
</body>

</html>