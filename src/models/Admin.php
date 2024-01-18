<?php
// Admin.php

// Include the Db class
require_once(__DIR__ . '/Db.php');

class Admin
{
    // Db instance
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    // Get admin details by ID
    // input: @param int $adminId
    // output: @return array
    public function getAdminById($adminId)
    {
        // Example: Get admin details by ID
        $query = "SELECT * FROM admins WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $adminId);

        return $this->db->single();
    }
}
