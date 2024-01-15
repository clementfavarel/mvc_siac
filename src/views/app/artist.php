<!-- background différent donc lié à $artworkData['aw_url'] -->
<!-- media peut être mp4 ou mp3 attention à traiter erreurs en fonction de la source -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artiste | App</title>
    <link rel="stylesheet" href="assets/css/artist.css" />
    <link rel="stylesheet" href="assets/css/tab-bar.css" />
</head>

<body>
    <div class="container">
        <div class="bg">
            <header>
                <a class="previous" href="index.php?action=map">
                    <img src="assets/icons/previous.svg" alt="Retour" />
                </a>
                <h3>Stand n°<?= $artistData['at_stand'] ?></h3>
            </header>
            <div class="profile">
                <img class="picture" src="assets/img/aklarousse/cocotte-barcelone.JPEG" alt="La Cocotte de Barcelone" />
                <h2 class="aw-title">la cocotte de barcelone</h2>
                <h1 class="at-name"><?= $artistData['at_firstname'] . ' ' . $artistData['at_lastname'] ?></h1>
            </div>
            <div class="video">
                <img class="plume-haute" src="assets/img/aklarousse/plume-haute.png" alt="plume" />
                <video class="media" controls>
                    <source src="movie.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img class="plume-basse" src="assets/img/aklarousse/plume-basse.png" alt="plume" />
            </div>
            <div class="separator">
                <hr class="big">
                <hr class="small">
            </div>
            <div class="carroussel">
                <img src="assets/icons/chevron-left.svg" alt="<" />
                <div class="text">
                    <div class="tab">
                        <h4>Qui est <?= $artistData['at_firstname'] . ' ' . $artistData['at_lastname'] ?> ?</h4>
                        <p><?= $artistData['at_story'] ?></p>
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
            <h2 class="aw-title">la cocotte de barcelone</h2>
            <img class="artwork-img" src="assets/img/aklarousse/cocotte-barcelone.JPEG" alt="La cocotte de Barcelone" />
        </div>
        <div class="anecdote"></div>
        <div class="description"></div>
        <div class="see-also"></div>
    </div>

    <?php include 'assets/includes/tab-bar.php'; ?>

    <script src="assets/js/tab-bar.js"></script>
</body>

</html>