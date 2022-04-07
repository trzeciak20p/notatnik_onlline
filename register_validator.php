<?php
ob_start();

if( !isset($_POST["submit"]) ){         //validacja
    echo "Nie łądnie tak wchodzić bez logowania!";
    header("refresh:3; url=register.php");  
}else{  
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

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$f = fopen("data/users.txt", 'r+');
$x = false;

while(!feof($f)){
    if( explode(" ", fgets($f) )[0] == $login){      
        $x = true;       
    }
}
if($x){
    echo "Podana nazwa użytkownika jest już zajęta!";
    header("refresh:3; url=register.php");  
}else{
    fwrite($f, "$login $password 0\n");         //0 - dla konta bez subskrybcji
}

fclose($f);
header("Location: login.php");  
exit;
}