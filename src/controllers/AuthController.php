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
        // Validate user input
        $user_email = $_POST['user_email'];
        $user_pwd = $_POST['user_pwd'];

        if (empty($user_email) || empty($user_pwd)) {
            // Redirect with an error message
            header('Location: index.php?action=login&error=Please fill in all fields');
            exit();
        }

        // Authenticate user
        $authenticatedUser = $this->userModel->authenticateUser($user_email, $user_pwd);

        if ($authenticatedUser) {
            // Set session variables
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
        // Validate user input
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_job = $_POST['user_job'];
        $user_email = $_POST['user_email'];
        $day = $_POST['dd'];
        $month = $_POST['mm'];
        $year = $_POST['yyyy'];
        $user_pwd = $_POST['user_pwd'];
        $user_pwd_confirm = $_POST['user_pwd_confirm'];

        if (empty($user_firstname) || empty($user_lastname) || empty($user_job) || empty($user_email) || empty($day) || empty($month) || empty($year) || empty($user_pwd) || empty($user_pwd_confirm)) {
            // Redirect with an error message
            header('Location: index.php?action=register&error=Please fill in all fields');
            exit();
        }

        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            // Redirect with an error message
            header('Location: index.php?action=register&error=Invalid email');
            exit();
        }

        if ($user_pwd !== $user_pwd_confirm) {
            // Redirect with an error message
            header('Location: index.php?action=register&error=Passwords do not match');
            exit();
        }

        // Format the date of birth
        $user_birth_date = $year . '-' . $month . '-' . $day;

        // Create a new user in the database
        $createdUser = $this->userModel->createUser($user_firstname, $user_lastname, $user_job, $user_email, $user_birth_date, $user_pwd);

        if ($createdUser) {
            // Set session variables
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
        // Display an error page
        include(__DIR__ . '/../views/error/401.php');
    }

    public function showError()
    {
        // Display an error page
        include(__DIR__ . '/../views/error/404.php');
    }
    // Add other methods for handling additional authentication-related actions, if needed
}
