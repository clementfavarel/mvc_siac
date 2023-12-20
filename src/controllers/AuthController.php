<?php
// AuthController.php

require_once(__DIR__ . '/../models/User.php'); // Adjust the path based on your project structure

class AuthController
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
            case 'login':
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $this->showLoginForm();
                } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->handleLogin();
                }
                break;

            case 'register':
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $this->showRegisterForm();
                } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->handleRegister();
                }
                break;

                // Add other authentication-related actions as needed

            default:
                $this->showError();
                break;
        }
    }

    public function showLoginForm()
    {
        include(__DIR__ . '/../views/auth/login.php');
    }

    private function handleLogin()
    {
        // Example: Validate user input
        $user_email = $_POST['user_email'];
        $user_pwd = $_POST['user_pwd'];

        if (empty($user_email) || empty($user_pwd)) {
            // Redirect with an error message
            header('Location: index.php?action=login&error=Please fill in all fields');
            exit();
        }

        // Example: Authenticate user
        $authenticatedUser = $this->userModel->authenticateUser($user_email, $user_pwd);

        if ($authenticatedUser) {
            // Example: Set session variables
            $_SESSION['user_id'] = $authenticatedUser['user_id'];
            $_SESSION['user_role'] = $authenticatedUser['user_role'];

            // Redirect to the user dashboard or another suitable page
            header('Location: index.php?action=map');
            exit();
        } else {
            // Redirect with an error message
            header('Location: index.php?action=login&error=Invalid credentials');
            exit();
        }
    }

    public function showRegisterForm()
    {
        include(__DIR__ . '/../views/auth/register.php');
    }

    private function handleRegister()
    {
        // Example: Validate user input
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_pwd = $_POST['user_pwd'];

        if (empty($user_name) || empty($user_email) || empty($user_pwd)) {
            // Redirect with an error message
            header('Location: index.php?action=register&error=Please fill in all fields');
            exit();
        }

        // Example: Create a new user in the database
        $createdUser = $this->userModel->createUser($user_name, $user_email, $user_pwd);

        if ($createdUser) {
            // Example: Set session variables
            $_SESSION['user_id'] = $createdUser['user_id'];
            $_SESSION['user_role'] = $createdUser['user_role'];

            // Redirect to the user dashboard or another suitable page
            header('Location: index.php?action=map');
            exit();
        } else {
            // Redirect with an error message
            header('Location: index.php?action=register&error=Registration failed');
            exit();
        }
    }

    public function showUnauthorized()
    {
        // Example: Display an error page
        include(__DIR__ . '/../views/error/401.php');
    }

    public function showError()
    {
        // Example: Display an error page
        include(__DIR__ . '/../views/error/404.php');
    }
    // Add other methods for handling additional authentication-related actions, if needed
}
