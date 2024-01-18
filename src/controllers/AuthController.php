<?php
// AuthController.php

// Include the User model
require_once(__DIR__ . '/../models/User.php');

class AuthController
{
    // User model instance
    private $userModel;

    public function __construct()
    {
        // Initialize the User model
        $this->userModel = new User();
    }

    // Handle different authentication actions based on the provided action in the url
    // input: @param string $action
    // output: @return void
    public function handleAction($action)
    {
        switch ($action) {
            case 'login':
                // Show login form for GET request, handle login for POST request
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $this->showLoginForm();
                } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->handleLogin();
                }
                break;

            case 'register':
                // Show registration form for GET request, handle registration for POST request
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

    // Display the login form
    // output: @return void
    public function showLoginForm()
    {
        include(__DIR__ . '/../views/auth/login.php');
    }

    // Handle the login process
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

    // Display the registration form
    // output: @return void
    public function showRegisterForm()
    {
        include(__DIR__ . '/../views/auth/register.php');
    }

    // Handle the registration process
    // This function get the POST data from the registration form and create a new user in the database
    // output: @return void
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

    // Display an unauthorized error page
    // output: @return void
    public function showUnauthorized()
    {
        include(__DIR__ . '/../views/error/401.php');
    }

    // Display an not found error page
    // output: @return void
    public function showError()
    {
        include(__DIR__ . '/../views/error/404.php');
    }

    // Log out the user
    // output: @return void
    public function logOut()
    {
        // Destroy the session
        session_destroy();

        // Redirect to the landing page
        header('Location: index.php');
        exit();
    }
}
