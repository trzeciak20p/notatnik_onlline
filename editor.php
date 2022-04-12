<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaintOn</title>      
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" sizes="32X32">
</head>

<body>

    <nav>
        <a href="projects.php">Powrót</a>
    </nav>

    <?php
    
    session_start();
    if( isset($_SESSION["login"]) ){

    if( isset($_POST["new_project"]) && !empty($_POST["project_name"]) ){
        //tworzenie nowego projektu
        $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["project_name"];
        if(!is_dir($dir)){
            mkdir($dir);
        }
            

    }   //else if($_POST[""])       jakoś sprawdzanie czy wybierarsz nowy projekt 

    }else{
        echo "<h1>NIE JESTEŚ ZALOGOWANY!</h1>   <br/><br/><br/> <a href='login.php'> Zaloguj się </a>";

    }

    // otwierańsko

?>










