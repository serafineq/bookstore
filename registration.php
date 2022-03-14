<?php
$connect = mysqli_connect("localhost",'root','','ksiegarnia');

if(!Empty($_POST['firstname']) && !Empty($_POST['lastname']) && !Empty($_POST['email']) && !Empty($_POST['password'])) {
    $email = $_POST['email'];
    $result = mysqli_query($connect,"SELECT id_klienta from klient where email='$email'");
    $count = mysqli_num_rows($result);
    if($count>0) {
        echo "<script>
            var error = document.getElementById('error');
            error.style.display = 'block';
            </script>";
        echo "Już taki adres email został użyty";
    }
    else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $firstname = ucwords($firstname);
        $lastname = ucwords($lastname);
        if(preg_match("/(*UTF8)^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/",$firstname) && preg_match("/(*UTF8)^[A-ZŁŚ]{1}+[a-ząęółśżźćń]+$/",$lastname) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mysqli_query($connect,"INSERT INTO KLIENT(nazwisko,imie,email,haslo) values('$lastname','$firstname','$email','$password')");
            header("Location: logowanie.php");
        }
        else {
            echo "<script>
            var error = document.getElementById('error');
            error.style.display = 'block';
               email.style.backgroundColor= 'rgb(248, 72, 72)';
            </script>";
        echo "Rejestracja nie przebiegła pomyślnie";
        }
    }
}
else {
    // echo "<script>
    // var error = document.getElementById('error');
    // error.style.display = 'block';
    // </script>";
    //  echo "Nie poprawne dane";
}
?>