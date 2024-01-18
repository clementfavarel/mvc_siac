<?php
// Db.php

// Include the database configuration
require_once(__DIR__ . '/../config/config.php');

class Db
{
    // Database connection instance
    private $db;
    // Prepared statement
    private $stmt;

    public function __construct()
    {
        // Establish a database connection
        $this->db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Set the character set to utf8
        $this->db->exec('SET NAMES utf8');
    }

    // Prepare a SQL query
    // input: @param string $sql
    // output: @return $this
    public function query($sql)
    {
        // Prepare a SQL query
        $this->stmt = $this->db->prepare($sql);
        return $this;
    }

    // Bind a parameter value
    // input: @param string $param
    // input: @param string $value
    // input: @param string $type
    // output: @return $this
    public function bind($param, $value, $type = null)
    {
        // Bind a parameter value
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
        return $this;
    }

    // Execute the prepared statement
    // output: @return bool
    public function execute()
    {
        // Execute the prepared statement
        return $this->stmt->execute();
    }

    // Get the result set as an array of objects
    // output: @return array
    public function single()
    {
        // Fetch a single result
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Get the result set as an array of objects
    // output: @return array
    public function all()
    {
        // Fetch all results
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get the number of affected rows
    // output: @return int
    public function rowCount()
    {
        // Get the number of affected rows
        return $this->stmt->rowCount();
    }

    // Get the last inserted ID
    // output: @return string
    public function lastInsertId()
    {
        // Get the last inserted ID
        return $this->db->lastInsertId();
    }
}
