<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Webutazás - Üdvözöljük!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #3f51b5;
            color: white;
            padding: 10px 0;
            text-align: center;
            width: 100%;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .link {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3f51b5;
            color: white;
            border-radius: 4px;
            margin-top: 20px;
            display: inline-block;
        }

        .link:hover {
            background-color: #6373c3;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #3f51b5;
        }

        p {
            line-height: 1.6;
        }

        @media only screen and (max-width: 600px) {
            section {
                margin: 10px;
                padding: 10px;
            }

            .link {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <h2>Webutazás - Üdvözöljük!</h2>
</header>

<div class="container">
    
    <a href="register.php" class="link">Belépés</a>
</div>

<section>
    <h1>Üdvözöljük a Webutazás oldalán!</h1>

    <p>
        A Webutazás egy innovatív utazási cég, amely elkötelezett a kiválóság és az élmények iránt. 
        Utazásaink során célunk, hogy felejthetetlen élményeket nyújtsunk ügyfeleinknek, 
        legyen szó akár pihentető hétvégi kiruccanásról, vagy kalandos távoli utazásról.
    </p>

    <p>
        Az elmúlt évek során számos elégedett ügyféllel büszkélkedhetünk, akik velünk fedezték fel a világ szépségeit. 
        A Webutazás csapata elkötelezett abban, hogy minden utazásunkat gondosan tervezze meg, és a legmagasabb színvonalú 
        szolgáltatásokat nyújtsa ügyfeleink számára.
    </p>

    <p>
        Válassza a Webutazást, ha szeretné, hogy utazása ne csupán egy úticél legyen, hanem egy felejthetetlen élmény, 
        amely örökre az emlékei közé kerül.
    </p>
</section>

</body>
</html>
