<!DOCTYPE html>
<html>
<head>
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
