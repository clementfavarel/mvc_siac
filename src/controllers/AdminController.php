<?php
// AdminController.php

// Include the Admin model
require_once(__DIR__ . '/../models/Admin.php');

class AdminController
{
    // Admin model instance
    private $adminModel;

    public function __construct()
    {
        // Initialize the Admin model
        $this->adminModel = new Admin();
    }

    // Handle different admin actions based on the provided action in the url
    // input: @param string $action
    // output: @return void
    public function handleAction($action)
    {
        switch ($action) {
            case 'dashboard':
                // Display the admin dashboard
                $this->showDashboard();
                break;

                // Add other actions as needed

            default:
                // Handle unknown action
                // Redirect to a suitable default page or display an error
                break;
        }
    }

    // Display the admin dashboard
    // output: @return void
    private function showDashboard()
    {
        // Example: Display the admin dashboard
        // You can fetch admin-specific data and render the dashboard view
        $adminId = $_SESSION['admin_id'];
        $adminData = $this->adminModel->getAdminById($adminId);

        // Example: Load the admin dashboard view
        include(__DIR__ . '/../views/admin/dashboard.php');
    }
}
