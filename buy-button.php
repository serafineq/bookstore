<?php
session_start();
$idksiazki = $_SESSION["idksiazki"];
$email = $_SESSION["email"];
$cena = $_SESSION["cena"];
$connect = mysqli_connect("localhost","root","","ksiegarnia");
$queryID = mysqli_query($connect,"select id_klienta,pieniadze from klient where email='".$email."'");
while($tab=mysqli_fetch_array($queryID)) {
    $id = $tab['id_klienta'];
    $money = $tab['pieniadze'];
}
$query3 = mysqli_query($connect,"select * from zamowienia where id_klienta='".$id."' and id_ksiazki='".$idksiazki."'");
$count = mysqli_num_rows($query3);
if($count==0) {
    if($money-$cena>0) {
        $date = date("Y-m-d");
        mysqli_query($connect,"INSERT INTO zamowienia(data_zlozenia_zamowienia,id_klienta,id_ksiazki) values ('$date','$id','$idksiazki')");
        mysqli_query($connect,"update klient set pieniadze = pieniadze -".$cena." where id_klienta='".$id."'");
        header("Location: index.php");
    }
    else {
        header("Location: no-money.php");
    }
}
else {
    header("Location: buy-error.php");
}

?>