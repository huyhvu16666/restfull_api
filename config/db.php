<?php
// connect database by PDO
// mysqli pdo
class db
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "api_php";
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->db, $this->username, $this->password);
            // set the PDO error mode to exception  
            $conn = $this->conn;
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
