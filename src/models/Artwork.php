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

    // Get artworks by artist ID
    // input: @param int $artist_id
    // output: @return array
    public function getMainArtworkByArtistId($artist_id)
    {
        // Get artwork details by ID
        $query = "SELECT * FROM artworks WHERE artist_id = :artist_id AND importance = :importance";
        $this->db->query($query);
        $this->db->bind(':artist_id', $artist_id);
        $this->db->bind(':importance', 'primary');

        return $this->db->single();
    }

    // Get second priority artworks by artist ID
    // input: @param int $artist_id
    // output: @return array
    public function getArtworksByArtistId($artist_id)
    {
        // Get artwork details by ID
        $query = "SELECT * FROM artworks WHERE artist_id = :artist_id AND importance = :importance";
        $this->db->query($query);
        $this->db->bind(':artist_id', $artist_id);
        $this->db->bind(':importance', 'secondary');

        return $this->db->all();
    }
}
