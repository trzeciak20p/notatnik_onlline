<?php


if( isset($_SESSION["login"]) ){
    echo "Witaj " . $_SESSION["login"];
}else{
    echo "<a href='login.php'>Zaloguj się</a>";
}

