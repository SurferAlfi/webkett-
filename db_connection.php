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
?>
