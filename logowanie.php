<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link rel="stylesheet" href="brown-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="brown-form.css">
    <link rel="icon" href="icon.png">
</head>
<body>
    <div id="frame">
    <?php
        session_start();
        ?>
        <header>
            <div id="name"><a href="index.php">ZAKSIĄŻKOWANI.PL</a></div>
        </header>
        <section id="menu-box">
            <ul>
                <a href="ksiazki.php"><li>Książki</li></a>
                <a href="rejestracja.php"><li>Rejestracja</li></a>
                <a href="kontakt.php"><li>Kontakt</li></a>
                <a href="regulamin.php"><li>Regulamin</li></a>
            </ul>
        </section>
        <section id="main">
            <div id="main-box">
            <div id="ramka-form" style="height: 500px; padding-bottom: 100px;">
                <div id="nazwa">Logowanie</div>
            <form method="post" id="formularz" style="height: 90%; margin-bottom: 150px;">
                <label>Email</label>
                <br>
                <input minlength="5" name="email" id="email" type="text"></input>
                <br>
                <label>Hasło</label>
                <br>
                <input minlength="5" name="password" id="password" type="password"></input>
                <br>
                <button type="submit">ZALOGUJ SIĘ</button>
            </form>
            <?php
            require 'login.php';
            ?>
            </div>
            </div>
        </div>
        </section>
    </div>
</body>
</html>