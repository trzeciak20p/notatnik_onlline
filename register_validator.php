<?php

if( !isset($_POST["submit"]) ){     //sprawdzanie czy się weszło przez login.php
    echo "Nie łądnie tak wchodzić bez logowania!";
    header("refresh:5; url=register.php");  
}
if( empty($_POST["login"]) || empty($_POST["password"]) || empty($_POST["password2"]) ){
    echo "Ale podaj wszystko może";
    header("refresh:5; url=register.php");  
}
if( empty($_POST["captcha"]) ){
    echo "A przestań być robotem B(";
    header("refresh:5; url=register.php");  
}




header("Location: login.php");  
exit;