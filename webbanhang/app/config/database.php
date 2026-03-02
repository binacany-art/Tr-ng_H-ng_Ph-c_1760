<?php
class Database {
    private $host = "localhost";
    private $db_name = "my_store"; // Must match the name in HeidiSQL
    private $username = "root";
    private $password = ""; // Default for Laragon is empty
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>