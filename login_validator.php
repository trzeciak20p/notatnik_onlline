<?php

if( !isset($_POST["submit"]) ){     //sprawdzanie czy się weszło przez login.php
    echo "Nie łądnie tak wchodzić bez logowania!";
    header("refresh:5; url=login.php");  
}
if( empty($_POST["login"]) || empty($_POST["password"]) ){
    echo "Ale podaj wszystko może";
    header("refresh:5; url=login.php");  
}





header("Location: login.php");  
exit;