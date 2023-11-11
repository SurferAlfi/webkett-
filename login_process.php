<<<<<<< HEAD
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcisti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    $sql = "SELECT * FROM users WHERE username='$login_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($login_password, $row['password'])) {
            $_SESSION['username'] = $login_username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "Hibás felhasználónév vagy jelszó.";
        }
    } else {
        echo "Hibás felhasználónév vagy jelszó.";
    }
}

$conn->close();
?>
=======
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcisti";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Sikertelen kapcsolódás az adatbázishoz: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    $sql = "SELECT * FROM users WHERE username='$login_username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($login_password, $row['password'])) {
            $_SESSION['username'] = $login_username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "Hibás felhasználónév vagy jelszó.";
        }
    } else {
        echo "Hibás felhasználónév vagy jelszó.";
    }
}

$conn->close();
?>
>>>>>>> 2411aae4ae656e5090ecee4c98056ebf0dc8245a
