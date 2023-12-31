<?php
// Artist.php

require_once(__DIR__ . '/Db.php');

class Artist
{
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    public function getArtistById($artist_id)
    {
        // Get artist details by ID
        $query = "SELECT * FROM artists WHERE artist_id = :artist_id";
        $this->db->query($query);
        $this->db->bind(':artist_id', $artist_id);

        return $this->db->single();
    }
}
