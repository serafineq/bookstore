<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link id="styl" rel="stylesheet" href="brown-style.css">
    <link id="styl" rel="stylesheet" href="buy.css">
    <link id="styl" rel="stylesheet" href="responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="img\fontello\css\fontello.css">    
</head>
<body>
    <style>
    </style>
    <div id="frame">
    <?php
        session_start();
        if(!isset($_GET["id"])) {
            header("Location: ksiazki.php");
            exit();
        }
        ?>
        <header>
            <div id="name"><a href="index.php">ZAKSIĄŻKOWANI.PL</a></div>
        </header>
        <section id="menu-box">
            <ul>
                <a href="index.php"><li>Strona Główna</li></a>
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
                <a href="kontakt.php"><li>Kontakt</li></a>
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
        <div id="main-box" style="margin-right:auto; margin-left:8%">
        <?php
        $connect = mysqli_connect("localhost","root","","ksiegarnia");
        $result = mysqli_query($connect,"select * from ksiazki where id_ksiazki='".$_GET["id"]."'");
        while($tab=mysqli_fetch_array($result)) {
            echo "<div id='ramka'>";
            echo "<img src='".$tab["src"]."'</img>";
            echo "<div id='tytul-ksiazki'>".$tab["tytul"]."</div>";
            echo "<div id='opis-ksiazki'>".$tab["opis"]."</div>";
            echo "<div id='guziki'>";
            echo "<div id='cena'>Cena: ".$tab["cena"]."zł</div>";
            $_SESSION["idksiazki"] = $tab["id_ksiazki"];
            $_SESSION["cena"] = $tab["cena"];
            if(isset($_SESSION["email"])) {
                echo "<a href='buy-button.php'><button id='zakup'>Zakup</button></a>";
            }
            else {
                echo "<br><div id='zakup2' style='font-size:20px; margin-top:10px; margin-left:50%;'><i>Aby móc dokonać zakupu, musisz być zalogowanym.</i></div>";
            }
            echo "</div>";
            echo "</div>";
        }
        mysqli_close($connect);
                ?>
            </div>
        </div>
        </section>
    </div>
    <script src="style.js"></script>
    <script src="getid.js"></script>
</body>
</html>