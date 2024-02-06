<?php
// Artist.php

// Include the Db class
require_once(__DIR__ . '/Db.php');

class Artist
{
    // Db instance
    private $db;

    public function __construct()
    {
        // Initialize the Db class
        $this->db = new Db();
    }

    // Get all artists
    // input: @param int $artist_id
    // output: @return array
    public function getArtistById($artist_id)
    {
        // Get artist details by ID
        $query = "SELECT * FROM artists WHERE artist_id = :artist_id";
        $this->db->query($query);
        $this->db->bind(':artist_id', $artist_id);

        return $this->db->single();
    }

    // Get all artists
    // input: @param void
    // output: @return array
    public function getAllArtists()
    {
        // Get all artists
        $query = "SELECT * FROM artists";
        $this->db->query($query);

        return $this->db->all();
    }
}
