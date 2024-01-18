<?php
// Artwork.php

// Include the Db class
require_once(__DIR__ . '/Db.php');

class Artwork
{
    // Db instance
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    // Get all artworks
    // input: @param int $artist_id
    // output: @return array
    public function getArtworkById($artwork_id)
    {
        // Get artwork details by ID
        $query = "SELECT * FROM artworks WHERE artwork_id = :artwork_id";
        $this->db->query($query);
        $this->db->bind(':artwork_id', $artwork_id);

        return $this->db->single();
    }
}
