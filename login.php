<?php
$connect = mysqli_connect("localhost",'root','','ksiegarnia');
if(!Empty($_POST['email']) && !Empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $findEmail = mysqli_query($connect,"SELECT email,id_klienta from klient where haslo='$password'");
    echo mysqli_num_rows($findEmail);
    while($tab=mysqli_fetch_array($findEmail)) {
        $emailDB = $tab["email"];
        $_SESSION["id"] = $tab["id_klienta"];
    }
    $findPassword = mysqli_query($connect,"SELECT haslo from klient where email='$email'");
    while($tab=mysqli_fetch_array($findPassword)) {
        $passwordDB = $tab["haslo"];
    }
    if(($email==@$emailDB) && ($password==@$passwordDB)) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
    }
    else {
        echo "Nie możesz się zalogować";
    }
}
?>