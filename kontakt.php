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
                    <span><b>Kontakt</b><br><div style="margin-top:10px; margin-bottom:10px;" class="icon-phone"><i>Numer telefonu:</i> 5355363632</div><div class="icon-mail-alt"><i>Email:</i> zaksiazkowani@gmail.com<br><br><div class="icon-home"><b><i>Lokalizacja</i></b></div></div>
                    <iframe style="margin-top: 20px; border-radius: 5%; border:2px solid rgba(0, 0, 0, 0.69);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81066.15128419409!2d21.628612281447243!3d50.58405684802592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d4a0dd8824db1%3A0xc70875667fbbaaf3!2sTarnobrzeg!5e0!3m2!1spl!2spl!4v1644573196779!5m2!1spl!2spl" width="500" height="400" style="border:0;" loading="lazy"></iframe>
                    </div>
                </span>
                </div>
            </div>
        </section>
    </div>
    <script src="getid.js"></script>
</body>
</html>