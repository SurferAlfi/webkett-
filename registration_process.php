<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcisti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Jelszavak biztonságos kezelése hasheléssel
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sikeres regisztráció!";
    } else {
        echo "Hiba a regisztráció során: " . $conn->error;
    }
}

$conn->close();
?>
