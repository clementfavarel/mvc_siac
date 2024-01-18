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

            case 'artwork':
                // Check if artwork_id is set in the URL
                if (isset($_GET['artwork_id'])) {
                    $artwork_id = $_GET['artwork_id'];
                    $this->showArtwork($artwork_id);
                } else {
                    // Handle the case when artwork_id is not provided
                    $this->showError();
                }
                break;

            default:
                $this->showError();
                break;
        }
    }

    // Display the user map
    // output: @return void
    private function showMap()
    {
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

        if ($artistData) {
            // Example: Load the artist view with data
            include(__DIR__ . '/../views/app/artist.php');
        } else {
            // Handle the case when artist with the specified ID is not found
            $this->showError();
        }
    }

    // Display the artwork page
    // input: @param int $artwork_id
    // output: @return void
    private function showArtwork($artwork_id)
    {
        // Fetch data for the specified artwork_id and render the artwork view
        $artworkData = $this->artworkModel->getArtworkById($artwork_id);

        if ($artworkData) {
            // Example: Load the artwork view with data
            include(__DIR__ . '/../views/app/artwork.php');
        } else {
            // Handle the case when artwork with the specified ID is not found
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
