<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció és Bejelentkezés</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            color: #3f51b5;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3f51b5;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6373c3;
        }
    </style>
</head>
<body>

<form action="registration_process.php" method="post">
    <h2>Regisztráció</h2>
    <label for="username">Felhasználónév:</label>
    <input type="text" name="username" id="username">
    <label for="password">Jelszó:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Regisztráció">
</form>

<form action="login_process.php" method="post">
    <h2>Bejelentkezés</h2>
    <label for="login_username">Felhasználónév:</label>
    <input type="text" name="login_username" id="login_username">
    <label for="login_password">Jelszó:</label>
    <input type="password" name="login_password" id="login_password">
    <input type="submit" value="Bejelentkezés">
</form>

</body>
</html>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció és Bejelentkezés</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            color: #3f51b5;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3f51b5;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6373c3;
        }
    </style>
</head>
<body>

<form action="registration_process.php" method="post">
    <h2>Regisztráció</h2>
    <label for="username">Felhasználónév:</label>
    <input type="text" name="username" id="username">
    <label for="password">Jelszó:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Regisztráció">
</form>

<form action="login_process.php" method="post">
    <h2>Bejelentkezés</h2>
    <label for="login_username">Felhasználónév:</label>
    <input type="text" name="login_username" id="login_username">
    <label for="login_password">Jelszó:</label>
    <input type="password" name="login_password" id="login_password">
    <input type="submit" value="Bejelentkezés">
</form>

</body>
</html>

