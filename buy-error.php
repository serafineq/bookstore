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
    <link rel="stylesheet" href="img\fontello\css\fontello.css">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="img\fontello\css\fontello.css">
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
                       echo "<a href='logout.php'><li>Wyloguj</li></a>";
                    }
                    else {
                        echo "<a href='logowanie.php'><li>Logowanie</li></a>";
                    }
                    if(isset($_SESSION["email"])) {
                    }
                    else {
                        echo "<a href='rejestracja.php'><li>Rejestracja</li></a>";
                    }
                ?>
                <a href="regulamin.php"><li>Regulamin</li></a>
                <?php
                if(isset($_SESSION["email"])) {
                    echo "<a href='profil.php'><li><div class='icon-user'>Profil</div></li></a>";
                }
                else {
                    echo "<a href='rejestracja.php'><li>Rejestracja</li></a>";
                }
                ?>
            </ul>
        </section>
        <section id="main">
            <div id="main-box">
                <div id="idk">
                    <span>Nie możesz zakupić, książki którą już posiadasz. Listę wszystkich posiadanych przez ciebie książek sprawdzisz w profilu.</span></div>
                    <div id="autorzy" style="margin-top:50px; margin-left:5%; margin-right:auto;">
                    </div>
                </span>
                </div>
            </div>
        </section>
    </div>
    <script src="getid.js"></script>
</body>
</html>