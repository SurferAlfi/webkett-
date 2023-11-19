<div class="header">
<?php
session_start();

include_once('db_connection.php');
include_once('user.php');

$db = new Database("localhost", "root", "", "mcisti");
$conn = $db->getConnection();

$user = new User($conn);

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
    echo "Bejelentkezett: $loggedInUser";

    // Megjeleníti a híreket és véleményeket
    $sql = "SELECT news.*, users.username FROM news JOIN users ON news.user_id = users.id ORDER BY news.created_at DESC";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Hiba a hírek lekérdezése során: " . $conn->error;
        exit();
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>{$row['title']}</h2>";
            echo "<p>{$row['content']}</p>";
            echo "<p>Létrehozva: {$row['created_at']} by {$row['username']}</p>";
            echo "</div>";
        }
    } else {
        echo "<br>  Nincs még hír vagy vélemény.";
    }

    // MNB API hívása az EUR - HUF árfolyam lekérdezéséhez
    try {
    $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?wsdl");
    $response = $client->GetExchangeRates();

    if ($response === false || !isset($response->GetExchangeRatesResult->Rate)) {
        echo "Az EUR - HUF árfolyam nem található az MNB API válaszában.";
    } else {
        $exchangeRate = $response->GetExchangeRatesResult->Rate;
        echo "<p>EUR - HUF árfolyam: $exchangeRate</p>";
    }

    } catch (SoapFault $fault) {
        echo "SOAP hiba: " . $fault->getMessage();
    }

} else {
    header("Location: index.php");
    exit();
}

function getExchangeRate($rates, $fromCurrency, $toCurrency) {
    // Hibaellenőrzés: ellenőrizd, hogy a bemeneti tömb érvényes-e
    if (!is_array($rates) || count($rates) < 4) {
        return null;
    }

    // Végigiterálunk a tömbön
    for ($i = 0; $i < count($rates); $i += 4) {
        // Megkeressük az "EUR" - "HUF" devizapárt
        if ($rates[$i] === $fromCurrency && $rates[$i + 1] === $toCurrency) {
            // Hibaellenőrzés: ellenőrizd, hogy a nevező nem nulla
            if ($rates[$i + 3] !== 0) {
                // Az árfolyam a harmadik elem a tömbben
                return $rates[$i + 2] / $rates[$i + 3];
            } else {
                return null; // Ha a nevező nulla, az árfolyam nem érvényes
            }
        }
    }
    // Ha nem találtuk meg, visszatérünk null értékkel
    return null;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
    /* ... További stílusok ... */
    .header {
        text-align: left;
        padding: 20px;
        background-color: #3f51b5;
        color: white;
    }
</style>

<title>Üdvözlünk!</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
    }

    .message {
        font-size: 24px;
        color: #3f51b5;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap; /* Ez a változás teszi lehetővé, hogy az elemek egymás mellett legyenek */
        gap: 10px;
        align-items: center;
        justify-content: center; /* Középre igazítja az elemeket vízszintesen */
        margin-top: 20px;
        padding: 10px;
    }

    .gallery img {
        max-width: 300px;
        height: auto;
        border-radius: 8px;
    }

    .logout {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #3f51b5;
        color: white;
        border-radius: 4px;
    }

    .logout:hover {
        background-color: #6373c3;
    }
</style>
</head>
<body>

<div class="container">
    <div class="message">
        Üdvözlünk! Sikeresen bejelentkeztél.
    </div>

    <div class="gallery" id="imageGallery">
        <img src="egypt1.jpg" alt="Kép 1">
        <img src="egypt2.jpg" alt="Kép 2">
        <img src="egypt3.jpg" alt="Kép 3">
        <img src="egypt4.jpg" alt="Kép 4">
        <img src="egypt5.jpg" alt="Kép 5">
        <!-- Itt folytathatod további képekkel -->
    </div>

    <a href="index.php" class="logout">Kijelentkezés</a>
</div>

</body>
</html>
