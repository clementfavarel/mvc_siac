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

    // Check if the specified artwork is liked by the user
    // input: @param int $user_id, @param int $artwork_id
    // output: @return bool
    public function isLiked($user_id, $artwork_id)
    {
        $query = "SELECT COUNT(*) FROM likes WHERE user_id = :user_id AND artwork_id = :artwork_id";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':artwork_id', $artwork_id);
        $count = $this->db->single();

        return $count > 0;
    }

    // Remove the specified artwork from the user's favorites
    // input: @param int $user_id, @param int $artwork_id
    // output: @return bool
    public function removeLike($user_id, $artwork_id)
    {
        $query = "DELETE FROM likes WHERE user_id = :user_id AND artwork_id = :artwork_id";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':artwork_id', $artwork_id);

        return $this->db->execute();
    }

    // Add the specified artwork to the user's favorites
    // input: @param int $user_id, @param int $artwork_id
    // output: @return bool
    public function addLike($user_id, $artwork_id)
    {
        $query = "INSERT INTO likes (user_id, artwork_id) VALUES (:user_id, :artwork_id)";
        $this->db->query($query);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':artwork_id', $artwork_id);

        return $this->db->execute();
    }
}
