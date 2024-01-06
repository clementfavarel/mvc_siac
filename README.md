# SIAC

## Description

### [Le SIAC](https://siac-marseille.fr/)

Le SIAC se déroule au Parc Chanot à Marseille du 15 au 18 Mars.

Le SIAC c'est :

La présentation d’œuvres par les artistes eux-mêmes, tous professionnels, et non par des galeristes
Une exposition personnelle pour chacun des artistes sur des stands individuels
La présence permanente durant le salon de chacun des exposants, seuls interlocuteurs des visiteurs.
Une atmosphère unique, des œuvres originales accessibles, des artistes en direct, sont les ingrédients de ce cocktail dédié à la création.

### L'application

L'application permet de visualiser les artistes présents au salon.
Elle se présente sous plusieurs onglets :

-   **Landing Page** : page d'accueil de l'application. Elle permet de visualiser les informations de présentation du salon et de se connecter à l'application.

-   **Authentification** : permet de se connecter à l'application. Si l'utilisateur n'a pas de compte, il peut s'inscrire.

-   **Tutoriel** : Pop-up qui s'affiche lors de la première connexion à l'application. Il permet de visualiser les fonctionnalités de l'application.

-   **Plan** : permet de visualiser le plan du salon et de voir les emplacements des artistes. Si un emplacement est cliqué, un pop-up d'information apparait à l'écran et affiche les informations de l'oeuvre et de l'artiste sous différentes formes : ambiance sonore, interview, photos, etc.

De ses onglets on peut accéder à d'autres pages :

-   **Oeuvres** : permet de visualiser les oeuvres présentes au salon. Si une oeuvre est cliquée, un pop-up d'information apparait à l'écran et quelques informations de l'oeuvre sous différentes formes : ambiance sonore, interview, photos, etc. Un bouton "Voir plus" permet de visualiser l'oeuvre et toutes ses informations.

-   **Artistes** : permet de visualiser les artistes présents au salon. Si sur la page oeuvre le nom d'un artiste est cliqué, on arrive sur la page artiste et on peut visualiser les informations de l'artiste (biographie, oeuvres, etc.).

-   **Scanner** : permet de scanner les QR Codes présents sur les stands et de visualiser les informations de l'oeuvre et de l'artiste avec une animation en Réalité Augmentée.

-   **Profil** : permet de visualiser les informations de l'utilisateur connecté.

## Version

Version 1.0

### Technologies

-   Debian 12
-   Apache 2.4.57
-   MariaDB 10.11.14
-   PHP 8.2.7
-   JavaScript
-   HTML
-   CSS

## Installation

1. Cloner le dépôt git

    ```sh
    git clone https://github.com/clementfavarel/mvc_siac.git
    ```

    ou

    ```sh
    git clone git@github.com:clementfavarel/mvc_siac.git
    ```

2. Importer le fichier `src/config/mvc_siac.sql` dans le serveur MySQL/MariaDB
3. Créez une copie du fichier `src/config/config.sample.php` et nommez la `config.php`. Ensuite, configurez la connexion à la base de données dans le fichier `src/config/config.php` en modifiant les variables de connexion
4. Configurez votre serveur web pour qu'il utilise le dossier `src/` comme dossier racine ou uploadez uniquement le contenu du dossier `src/` sur votre serveur web
5. Lancez votre serveur web et dirigez vous vers l'URL du site

## Fonctionnement

### Accès de l'utilisateur à l'application :

L'utilisateur ouvre l'application en accédant au fichier index.php.

### Routage :

Le fichier index.php initialise l'application et achemine la requête vers le contrôleur approprié en fonction de l'action demandée par l'utilisateur dans l'URL.

### Contrôleur d'authentification :

Le contrôleur d'authentification (AuthController.php) gère les actions liées à l'authentification de l'utilisateur, telles que la connexion et l'inscription.
Il inclut des méthodes pour afficher les formulaires de connexion et d'inscription (vues login.php et register.php) et pour traiter les soumissions de formulaires.

### Contrôleurs d'utilisateur et d'administrateur :

UserController.php et AdminController.php gèrent les actions spécifiques aux utilisateurs réguliers et aux administrateurs, respectivement.
Ils incluent des méthodes pour afficher les pages utilisateur/administrateur et effectuer des tâches liées à l'utilisateur/l'administrateur.

### Modèles :

Les modèles User.php et Admin.php gèrent les interactions avec la base de données. Ils incluent des méthodes pour l'authentification des utilisateurs et des administrateurs, ainsi que toute autre opération liée aux données.

### Vues :

Le répertoire `views/` contient des sous-répertoires pour différents types d'utilisateurs (`auth/`, `user/`, `admin/`) et leurs vues respectives.
Les vues sont responsables du rendu du contenu HTML et de la présentation d'informations à l'utilisateur.

### Ressources :

Le répertoire `assets/` contient des ressources accessibles publiquement telles que des fichiers CSS et JavaScript, utilisés pour styliser et dynamiser l'interface utilisateur.

### Soumission de formulaires :

Lorsqu'un utilisateur soumet un formulaire (par exemple, connexion ou inscription), le contrôleur correspondant traite les données du formulaire. Par exemple, AuthController.php valide les informations d'identification de connexion et authentifie l'utilisateur.

### Authentification et autorisation :

Le contrôleur d'authentification communique avec le modèle approprié (User.php ou Admin.php) pour authentifier l'utilisateur ou l'administrateur en fonction des informations d'identification soumises.
Des vérifications d'autorisation garantissent que les utilisateurs ou administrateurs ne peuvent accéder qu'aux pages et effectuer des actions auxquelles ils sont autorisés.

### Affichage du tableau de bord :

Suite à une authentification réussie, l'utilisateur est redirigé vers l'onglet carte pour l'utilisateur et vers le tableau de bord pour l'administrateur (user/map.php ou admin/dashboard.php).

### Déconnexion :

Le système fournit un mécanisme permettant aux utilisateurs et aux administrateurs de se déconnecter, ce qui implique la destruction de la session et la redirection vers une page de confirmation de déconnexion ou la page de connexion.

## TODO

-   Modify the admin model because it is found in the session with the role but the models work with the db.admins table <!--!error-->

## Tests

### Functional Tests :

**Guest Access:**

-   Verify that a guest can access the landing page.
-   Verify that a guest can access the registration form.
-   Verify that a guest can access the login form.

**User Authentication:**

-   Test user login with valid credentials.
-   Test user login with invalid credentials.
-   Test user registration with valid input.
-   Test user registration with invalid input.

**User Dashboard:**

-   Test access to the user dashboard after successful login.
-   Test access to different sections of the user dashboard.

**Admin Authentication:**

-   Test admin login with valid credentials.
-   Test admin login with invalid credentials.

**Admin Dashboard:**

-   Test access to the admin dashboard after successful login.
-   Test access to different sections of the admin dashboard.

### Unit Tests :

**User Model:**

-   Test the authenticateUser method with valid credentials.
-   Test the authenticateUser method with invalid credentials.
-   Test the createUser method with valid input.
-   Test the createUser method with invalid input.

**Admin Model:**

-   Test the authenticateAdmin method with valid credentials.
-   Test the authenticateAdmin method with invalid credentials.

**Database Connection:**

-   Test the database connection by connecting and disconnecting.
-   Test database queries using mock data.

**Controller Methods:**

-   Test each method in the AuthController, UserController, and AdminController.
-   Ensure proper redirections, session handling, and view rendering.

**Error Handling:**

-   Test error handling mechanisms for invalid actions or unexpected scenarios.

**Session Handling:**

-   Test session creation and destruction during login and logout.
