<?php
class SoapService {
    private $conn;

    public function __construct() {
        // Adatbáziskapcsolat inicializálása
        $this->conn = new mysqli("localhost", "root", "", "mcisti");
        if ($this->conn->connect_error) {
            die("Sikertelen kapcsolódás az adatbázishoz: " . $this->conn->connect_error);
        }
    }

    public function getUsers() {
        $result = $this->conn->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
}

// SOAP szolgáltatás inicializálása és elindítása
$server = new SoapServer(null, ['uri' => 'http://localhost/soap_service.php']);
$server->setClass('SoapService');
$server->handle();
