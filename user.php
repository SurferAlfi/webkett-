<?php
// user.php

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function registerUser($username, $password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

        if ($this->conn->query($sql) === TRUE) {
            return "Sikeres regisztráció!";
        } else {
            return "Hiba a regisztráció során: " . $this->conn->error;
        }
    }

    public function loginUser($login_username, $login_password) {
        $sql = "SELECT * FROM users WHERE username='$login_username'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($login_password, $row['password'])) {
                return "Sikeres bejelentkezés!";
            } else {
                return "Hibás felhasználónév vagy jelszó.";
            }
        } else {
            return "Hibás felhasználónév vagy jelszó.";
        }
    }

    // További felhasználókezelési funkciók itt...
}
?>
