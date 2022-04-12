
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

    if( isset($_POST["new_project"]) && !empty($_POST["project_name"]) )

        if( $_POST["new_project"]){         //tworzenie nowego projektu
            $dir = $_SESSION["login"] . "/" .  $_POST["project_name"];
            if(is_dir($dir)){
                

            }else{
                mkdir($dir);
            }
            
        }else if(true){

        }

    }   //else if($_POST[""])       jakoś sprawdzanie czy wybierarsz nowy projekt 


    // otwierańsko

?>










