<?php
// Artwork.php

require_once(__DIR__ . '/Db.php');

class Artwork
{
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    public function getArtworkById($artwork_id)
    {
        // Get artwork details by ID
        $query = "SELECT * FROM artworks WHERE artwork_id = :artwork_id";
        $this->db->query($query);
        $this->db->bind(':artwork_id', $artwork_id);

        return $this->db->single();
    }
}
