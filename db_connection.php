<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcisti";

// Kapcsolódás létrehozása és ellenőrzése
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}
// db_connection.php
class Database {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Sikertelen kapcsolódás az adatbázishoz: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
