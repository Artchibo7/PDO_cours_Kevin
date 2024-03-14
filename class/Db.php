<?php

require_once __DIR__ . "/../config.php";

class Db {
    private $db;


    public function __construct() {
        try {
            $this->db = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASSWORD
            );
        } catch (PDOException $error) {
            die("Erreur : " . $error->getMessage());
        }
    }
    public function getDb() {
        return $this->db;
    }
}
