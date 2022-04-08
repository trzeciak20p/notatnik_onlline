<?php
session_start();

if( isset($_SESSION["login"]) ){
    echo "<a href='login.php'>Witaj " . $_SESSION["login"]. "</a>";
}else{
    echo "<a href='login.php'>Zaloguj się</a>";
}

