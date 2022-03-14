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
                <?php
                    if(isset($_SESSION["email"])) {

                    }
                    else {
                        echo "<a href='logowanie.php'><li>Logowanie</li></a>";
                    }
                ?>
                <a href="kontakt.php"><li>Kontakt</li></a>
                <a href="regulamin.php"><li>Regulamin</li></a>
            </ul>
        </section>
        <section id="main">
            <div id="main-box">
            <div id="ramka-form" style="padding-bottom: 20px;">
                <div id="nazwa">Rejestracja</div>
            <form method="post" id="formularz" style="padding-bottom: 20px;">
                <label>Imie</label><br>
                <input minlength="3" type="text" id="firstname" name="firstname"></input>
                <br>
                <label>Nazwisko</label>
                <br>
                <input minlength="3" type="text" id="lastname" name="lastname"></input>
                <br>
                <label>Email</label>
                <br>
                <input minlength="5" type="text" id="email" name="email"></input>
                <br>
                <label>Hasło</label>
                <br>
                <input minlength="5" type="password" name="password"></input>
                <br>
                <button id="submit">Zarejstruj się</button>
            </form>
            </div>
            </div>
            <div id="error" style="display:none">
             <?php
            require 'registration.php';
            ?>
            </div>
            </div>
        </div>
        </section>
    </div>
    <script src="validate.js"></script>
</body>
</html>