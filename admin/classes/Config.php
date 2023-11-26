<?php
class Config
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "blog_cms";
    public $conn;
    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    function __destruct()
    {
        $this->conn = null;
    }
}
$obj = new Config();
