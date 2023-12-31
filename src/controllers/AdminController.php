<?php
// AdminController.php

require_once(__DIR__ . '/../models/Admin.php');

class AdminController
{
    private $adminModel;

    public function __construct()
    {
        // Initialize the Admin model
        $this->adminModel = new Admin();
    }

    public function handleAction($action)
    {
        switch ($action) {
            case 'dashboard':
                $this->showDashboard();
                break;

                // Add other actions as needed

            default:
                // Handle unknown action
                // Redirect to a suitable default page or display an error
                break;
        }
    }

    private function showDashboard()
    {
        // Example: Display the admin dashboard
        // You can fetch admin-specific data and render the dashboard view
        $adminId = $_SESSION['admin_id'];
        $adminData = $this->adminModel->getAdminById($adminId);

        // Example: Load the admin dashboard view
        include(__DIR__ . '/../views/admin/dashboard.php');
    }

    // Add other methods for handling additional admin-related actions, if needed
}
