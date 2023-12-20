<?php
// Admin.php

require_once(__DIR__ . '/Db.php');

class Admin
{
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    public function getAdminById($adminId)
    {
        // Example: Get admin details by ID
        $query = "SELECT * FROM admins WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $adminId);

        return $this->db->single();
    }

    // Add other methods for additional admin-related database operations, if needed
}
