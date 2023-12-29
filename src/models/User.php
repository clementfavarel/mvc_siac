<?php
// User.php

require_once(__DIR__ . '/Db.php');

class User
{
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    public function authenticateUser($user_email, $user_pwd)
    {
        // Authenticate user
        $query = "SELECT * FROM users WHERE user_email = :user_email";
        $this->db->query($query);
        $this->db->bind(':user_email', $user_email);

        $user = $this->db->single();

        // Verify password if user exists
        if ($user && password_verify($user_pwd, $user['user_pwd'])) {
            return $user;
        }

        return null;
    }

    public function createUser($user_firstname, $user_lastname, $user_job, $user_email, $user_birth_date, $user_pwd)
    {
        // Hash the password
        $hashedPassword = password_hash($user_pwd, PASSWORD_DEFAULT);

        // Create a new user in the database
        $query = "INSERT INTO users (user_firstname, user_lastname, user_job, user_email, user_birth_date, user_pwd) VALUES (:user_firstname, :user_lastname, :user_job, :user_email, :user_birth_date, :user_pwd)";
        $this->db->query($query);
        $this->db->bind(':user_firstname', $user_firstname);
        $this->db->bind(':user_lastname', $user_lastname);
        $this->db->bind(':user_job', $user_job);
        $this->db->bind(':user_email', $user_email);
        $this->db->bind(':user_birth_date', $user_birth_date);
        $this->db->bind(':user_pwd', $hashedPassword);
        $this->db->execute();

        // Fetch the created user to return its details
        $userId = $this->db->lastInsertId();
        return $this->getUserById($userId);
    }

    public function getUserById($userId)
    {
        // Get user details by ID
        $query = "SELECT * FROM users WHERE user_id = :user_id";
        $this->db->query($query);
        $this->db->bind(':user_id', $userId);

        return $this->db->single();
    }

    public function getAllUsers()
    {
        // Get all users
        $query = "SELECT * FROM users";
        $this->db->query($query);

        return $this->db->all();
    }

    // Add other methods for additional user-related database operations, if needed
}
