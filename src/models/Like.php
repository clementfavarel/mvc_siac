<?php
require_once(__DIR__ . '/Db.php');

class Like
{
    // Db instance
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    // Get likes by user id
    // input: @param int $user_id
    // output: @return array
    public function getLikesByUserId($user_id)
    {
        // Get likes by user id
        $query = "SELECT * FROM likes WHERE user_id = :user_id";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);

        return $this->db->all();
    }

    // Add like
    // input: @param int $user_id
    // input: @param int $artwork_id
    // output: @return void
    public function addLike($user_id, $artwork_id)
    {
        // Add like
        $query = "INSERT INTO likes (user_id, artwork_id) VALUES (:user_id, :artwork_id)";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':artwork_id', $artwork_id);
        $this->db->execute();
    }
}
