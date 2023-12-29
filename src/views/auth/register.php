<!-- register.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription | Mapollon</title>
    <link rel="stylesheet" href="assets/css/auth.css" />
    <link rel="stylesheet" href="assets/css/register.css" />
</head>

<body>
    <a href="index.php" class="previous">
        <img src="assets/icons/previous.svg" alt="<=" />
    </a>
    <div class="container">
        <h1>Inscription</h1>
        <form method="post" id="regForm" action="index.php?action=register">
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <label for="user_firstname">Prénom</label>
                <input oninput="this.className = ''" name="user_firstname" />
                <label for="user_lastname">Nom</label>
                <input oninput="this.className = ''" name="user_lastname" />
            </div>
            <div class="tab">
                <label for="user_job">Profession</label>
                <input oninput="this.className = ''" name="user_job" />
                <label for="user_email">Email</label>
                <input type="email" oninput="this.className = ''" name="user_email" />
            </div>
            <div class="tab">
                <label for="birth">Date de naissance</label>
                <div class="birth">
                    <input placeholder="jj" oninput="this.className = ''" name="dd" />
                    <input placeholder="mm" oninput="this.className = ''" name="mm" />
                    <input placeholder="aaaa" oninput="this.className = ''" name="yyyy" />
                </div>
            </div>
            <div class="tab">
                <label for="user_pwd">Mot de passe</label>
                <input oninput="this.className = ''" name="user_pwd" type="password" />
                <label for="user_pwd_confirm">Confirmer le mot de passe</label>
                <input oninput="this.className = ''" name="user_pwd_confirm" type="password" />
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div class="dots">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
            <div class="btns">
                <button class="btn primary" type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                <button class="btn secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
            </div>
        </form>
    </div>

    <script src="assets/js/register-form.js"></script>
</body>

</html>