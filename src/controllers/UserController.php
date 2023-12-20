<?php
// UserController.php

require_once(__DIR__ . '/../models/User.php');

class UserController
{
    private $userModel;

    public function __construct()
    {
        // Initialize the User model
        $this->userModel = new User();
    }

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
                $this->showProfile();
                break;

            case 'artist':
                $this->showArtist();
                break;

            case 'artwork':
                $this->showArtwork();
                break;

            default:
                $this->showError();
                break;
        }
    }

    private function showMap()
    {
        // Example: Display the user map
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/map.php');
    }

    private function showScan()
    {
        // Example: Display the user scan page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/scan.php');
    }

    private function showLikes()
    {
        // Example: Display the user likes page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/likes.php');
    }

    private function showProfile()
    {
        // Example: Display the user profile
        // You can fetch user-specific data and render the profile view
        $userId = $_SESSION['user_id'];
        $userData = $this->userModel->getUserById($userId);

        // Example: Load the user profile view
        include(__DIR__ . '/../views/app/profile.php');
    }

    private function showArtist()
    {
        // Example: Display the artist page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/artist.php');
    }

    private function showArtwork()
    {
        // Example: Display the artwork page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/app/artwork.php');
    }

    private function showError()
    {
        // Example: Display an error page
        // You can implement logic and load the corresponding view
        include(__DIR__ . '/../views/error/404.php');
    }

    // Add other methods for handling additional user-related actions, if needed
}
