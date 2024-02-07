<?php
// UserController.php

// Include the User model
require_once(__DIR__ . '/../models/User.php');
// Include the Artwork model
require_once(__DIR__ . '/../models/Artwork.php');
// Include the Artist model
require_once(__DIR__ . '/../models/Artist.php');

class UserController
{
    // User model instance
    private $userModel;
    // Artwork model instance
    private $artworkModel;
    // Artist model instance
    private $artistModel;

    public function __construct()
    {
        // Initialize the User model
        $this->userModel = new User();
        // Initialize the Artwork model
        $this->artworkModel = new Artwork();
        // Initialize the Artist model
        $this->artistModel = new Artist();
    }

    // Handle different user actions based on the provided action in the url
    // input: @param string $action
    // output: @return void
    public function handleAction($action)
    {
        switch ($action) {
            case 'map':
                $this->showMap();
                break;

            case 'scan':
                $this->showScan();
                break;

            case 'likes':
                $this->showLikes();
                break;

            case 'profile':
                $this->showProfile($_SESSION['user_id']);
                break;

            case 'artist':
                // Check if artist_id is set in the URL
                if (isset($_GET['artist_id'])) {
                    $artist_id = $_GET['artist_id'];
                    $this->showArtist($artist_id);
                } else {
                    // Handle the case when artist_id is not provided
                    $this->showError();
                }
                break;

            case 'update_user':
                $user_id = $_SESSION['user_id'];
                $user_data = $this->userModel->updateUser($user_id);
                if ($user_data) {
                    // Redirect to the user profile page
                    header('Location: index.php?action=profile');
                } else {
                    // Handle the case when user update fails
                    $this->showError();
                }
                break;

            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;
            case 'add_like':
                $this->addLike();
                brake

            default:
                $this->showError();
                break;
        }
    }

    // Display the user map
    // output: @return void
    private function showMap()
    {
        $artistsData = $this->artistModel->getAllArtists();
        // Example: Display the user map
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/map.php');
    }

    // Display the user scan page
    // output: @return void
    private function showScan()
    {
        // Example: Display the user scan page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/scan.php');
    }

    // Display the user likes page
    // output: @return void
    private function showLikes()
    {
        // Example: Display the user likes page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/likes.php');
    }

    public function addLike()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérifier si l'utilisateur est connecté
            if (!isset($_SESSION['user_id'])) {
                // Si l'utilisateur n'est pas connecté, renvoyer une erreur
                http_response_code(401); // Unauthorized
                echo json_encode(array('message' => 'Unauthorized'));
                exit();
            }

            // Vérifier si l'ID de l'œuvre est fourni dans la requête POST
            if (!isset($_POST['oeuvre_id'])) {
                // Si l'ID de l'œuvre n'est pas fourni, renvoyer une erreur
                http_response_code(400); // Bad Request
                echo json_encode(array('message' => 'Oeuvre ID is missing'));
                exit();
            }

            // Récupérer l'ID de l'œuvre depuis la requête POST
            $oeuvreId = $_POST['oeuvre_id'];

            // Ajouter le code pour ajouter l'ID de l'œuvre aux favoris de l'utilisateur dans la base de données
            // (Utilisez votre logique pour ajouter l'œuvre aux favoris)

            // Envoyer une réponse JSON pour indiquer que l'œuvre a été ajoutée aux favoris avec succès
            http_response_code(200); // OK
            echo json_encode(array('message' => 'Oeuvre ajoutée aux favoris avec succès'));
            exit();
        } else {
            // Si la méthode de la requête n'est pas POST, renvoyer une erreur
            http_response_code(405); // Method Not Allowed
            echo json_encode(array('message' => 'Method Not Allowed'));
            exit();
        }
    }
    
    // Display the user profile page
    // input: @param int $userId
    // output: @return void
    private function showProfile($userId)
    {
        // Example: Display the user profile
        // You can fetch user-specific data and render the profile view
        $userData = $this->userModel->getUserById($userId);

        // Example: Load the user profile view
        include(__DIR__ . '/../views/app/profile.php');
    }

    // Display the artist page
    // input: @param int $artist_id
    // output: @return void
    private function showArtist($artist_id)
    {
        // Example: Display the artist page based on $artist_id
        // You can implement logic and load the corresponding artist view
        // Fetch data for the specified artist_id and render the artist view
        $artistData = $this->artistModel->getArtistById($artist_id);
        $artworkData = $this->artworkModel->getMainArtworkByArtistId($artist_id);

        if ($artistData && $artworkData) {
            // Example: Load the artist view with data
            include(__DIR__ . '/../views/app/artist.php');
        } else {
            // Handle the case when artist with the specified ID is not found
            $this->showError();
        }
    }


    // Display an error page
    // output: @return void
    private function showError()
    {
        // Example: Display an error page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/error/404.php');
    }
}
