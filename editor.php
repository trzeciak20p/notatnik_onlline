<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaintOn</title>      
    <link rel="stylesheet" href="style_editor.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" sizes="32X32">
    <script src="canvas.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <nav>
        <a href="projects.php">Powrót</a>

    <?php
    
    session_start();
    if( !isset($_SESSION["login"]) ){

        echo "</nav><h1>NIE JESTEŚ ZALOGOWANY!</h1>   <br/><br/><br/> <a href='login.php'> Zaloguj się </a>";

    }else{

        $load = true;
        if( isset($_POST["new_project"]) && !empty($_POST["project_name"]) ){
            //tworzenie nowego projektu lub wybieranie istniejącego jak dir istnieje
            $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["project_name"];
            if(!is_dir($dir)){
                mkdir($dir);
                $load = false;      //godlike 2 lines save
            }  
    
        }else if( isset($_POST["open_project"]) ){
            $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["open_project"];
            echo "<span>". $_POST["open_project"] ."</span> </nav>";   


        }
        //struktura jak wszystko jest git
        
        
        echo '  </nav><main>
                <div>
                    <canvas id="show_canvas" width="750px" height="400px"></canvas>
                    <canvas id="pen_canvas" width="750px" height="400px"></canvas>
                </div>
                <div id="editor_feed">
                    <div id="tools">
                        <input id="tool_square" type="button" value="kwadrat">
                        <input id="tool_circle" type="button" value="kółko">
                        
                        <br/>
                        <label> Kolor pędzla:
                            <input id="pen_color" type="color">
                        </label>
                        <label> Rozmiar pędzla:
                            <input id="pen_size" type="number" value="25">
                        </label>                      
                    </div>    
                    <input id="save_project" type="button" value="ZAPISZ">
                </div>
                </main>';
        
                echo $_POST["canvas"];

                $save = $_POST["canvas"];
                $dir = "data/" . $_SESSION["login"]. "/". $_POST["open_project"]. "/canvas1.jpg";
                echo $dir;
                $f = fopen($dir, "w+");
                fwrite($f, $_POST["canvas"]);
        
    }

    ?>








</body>
</html>