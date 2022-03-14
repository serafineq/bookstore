<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiegarnia</title>
    <link id="styl" rel="stylesheet" href="brown-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="icon.png">
</head>
<body>
    <style>
    </style>
    <div id="frame">
    <?php
        session_start();
        ?>
        <header>
            <div id="name"><a href="index.php">ZAKSIĄŻKOWANI.PL</a></div>
        </header>
        <section id="menu-box">
            <ul>
                <a href="index.php"><li>Strona Główna</li></a>
                <?php
                    if(isset($_SESSION["email"])) {

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
                <a href="kontakt.html"><li>Kontakt</li></a>
                <a href="regulamin.php"><li>Regulamin</li></a>
            </ul>
        </section>
        <section id="main">
        <?php
         $connect = mysqli_connect("localhost","root","","ksiegarnia");
         $result = mysqli_query($connect,"select * from ksiazki where id_autora='".$_GET["idautor"]."'");
         $count = mysqli_num_rows($result);
         $autors = mysqli_query($connect,"select imie,nazwisko from autor where id_autora='".$_GET["idautor"]."'");
         while($tab=mysqli_fetch_array($autors)) {
            $name= $tab["imie"];
            $lastname= $tab["nazwisko"];
        }
         echo "<div id='title'>Te książki ".$name." ".$lastname." napisał/a (".$count.")</div>";
        ?>
            <div id="main-box" style="margin-right:auto; margin-left:8%">
                <?php
                while($tab=mysqli_fetch_array($result)) {
                    echo "<div id='".$tab["id_ksiazki"]."'class='okladka'>";
                    echo "<a href='buy.php?id=".$tab["id_ksiazki"]."'>";
                    echo "<img src='".$tab["src"]."'</img></a>";
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