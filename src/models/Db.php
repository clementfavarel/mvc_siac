<?php
// Db.php

require_once(__DIR__ . '/../config/config.php');

class Db
{
    private $db;
    private $stmt;

    public function __construct()
    {
        // Establish a database connection
        $this->db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql)
    {
        // Prepare a SQL query
        $this->stmt = $this->db->prepare($sql);
        return $this;
    }

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

    public function execute()
    {
        // Execute the prepared statement
        return $this->stmt->execute();
    }

    public function single()
    {
        // Fetch a single result
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function all()
    {
        // Fetch all results
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        // Get the number of affected rows
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        // Get the last inserted ID
        return $this->db->lastInsertId();
    }
}
