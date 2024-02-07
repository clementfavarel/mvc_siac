<?php
// index.php

// Start the session
session_start();

// Include the configuration file
require_once(__DIR__ . '/config/config.php');

// Include necessary classes and functions
require_once(__DIR__ . '/controllers/AuthController.php');
require_once(__DIR__ . '/controllers/UserController.php');
require_once(__DIR__ . '/controllers/AdminController.php');

// Get the current action from the URL
$action = isset($_GET['action']) ? $_GET['action'] : 'map';

// Check if the user is logged in
if (isset($_SESSION['user_role'])) {
    // User is logged in, determine the user role
    $userRole = $_SESSION['user_role'];

    // Route the request based on the user role and action
    switch ($userRole) {
        case 'user':
            $userController = new UserController();
            $userController->handleAction($action);
            break;

        case 'admin':
            $adminController = new AdminController();
            $adminController->handleAction($action);
            break;

        case 'map':
            include(__DIR__ . '/views/app/map.php');
            break;

        default:
            $authController = new AuthController();
            $authController->showUnauthorized();
            break;
    }

    // Check if the user wants to log out
    if ($action === 'logout') {
        $authController = new AuthController();
        $authController->logOut();
    }
} else {
    // User is not logged in (guest)

    // Check if a specific action is requested by the guest
    if ($action === 'login' || $action === 'register') {
        // Guest wants to sign up or sign in
        $authController = new AuthController();
        $authController->handleAction($action);
    } else if ($action === 'map') {
        include(__DIR__ . '/views/app/map.php');
    } else if ($action === 'logout') {
        include(__DIR__ . '/views/landing.php');
    } else {
        // Guest is on the landing page
        include(__DIR__ . '/views/landing.php');
    }
}
