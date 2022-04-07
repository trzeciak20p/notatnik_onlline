<?php
ob_start();
session_start();


if( !isset($_POST["submit"]) ){         //validacja
    echo "Nie ładnie tak wchodzić bez logowania!";
    header("refresh:3; url=login.php");  
}
if( empty($_POST["login"]) || empty($_POST["password"]) ){
    echo "Ale podaj wszystko może";
    header("refresh:3; url=login.php");  
}

//sprawdzanie czy w pliku istnieje


$_SESSION["login"] = $_POST["login"];
$_SESSION["password"] = $_POST["password"];



// header("Location: index.php");  
exit;