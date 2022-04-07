<?php
ob_start();

if( !isset($_POST["submit"]) ){         //validacja
    echo "Nie łądnie tak wchodzić bez logowania!";
    header("refresh:3; url=register.php");  
}
if( empty($_POST["login"]) || empty($_POST["password"]) || empty($_POST["password2"]) ){
    echo "Ale podaj wszystko może";
    header("refresh:3; url=register.php");  
}
if( empty($_POST["captcha"]) ){
    echo "A przestań być robotem B(";
    header("refresh:3; url=register.php");  
}
if( $_POST["password"] != $_POST["password2"] ){
    echo "Podane hasła nie są takie same!";
    header("refresh:3; url=register.php");  
}

//zapisywanie do pliku
fopen("data/users.txt")


// header("Location: login.php");  
exit;