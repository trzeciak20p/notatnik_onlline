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

        //tworzenie nowego projektu lub wybieranie istniejącego jak dir istnieje
        $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["open_project"];    //folder projektu
        $layers_dir = $dir . "/layers.txt";
        $load = true;
        if( isset($_POST["new_project"]) && !empty($_POST["project_name"]) ){
            
            if(!is_dir($dir)){
                mkdir($dir);
                $layers = fopen($layers_dir, "a+");     //tworzenie pliku (nwm czy tak można)[tak można a nawet trzeba]
                fclose($layers);
                
                $load = false;      //godlike 2 lines save
            }  
    
        }else if( isset($_POST["open_project"]) ){
            $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["open_project"];
            echo "<span>". $_POST["open_project"] ."</span> </nav>";   


        }
        //struktura jak wszystko jest git
        
        if($load){

        }
        
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
                    <form method="POST" action="editor.php">
                        <input id="save_project" type="submit" value="ZAPISZ">
                        <input class="plshide" name="open_project" value="'.$_POST["open_project"].'">
                    </form>
                </div>
                </main>';
        
    }

    function zapiszCanvas(){
        global $layers_dir;
        unlink($layers_dir);
        $f = fopen($layers_dir, "a+");
        fwrite($f, $_POST['canvas']);
        fclose($f);
        
        return;
    }

    function wczytajCanvas(){     //linie od zera dla łatwości może raczej   
        global $layers_dir;     
        $f = fopen($layers_dir, "a+");
        $i = 0;
        while(!feof($f)){
            echo '<div class="plshide" id="layer'. $i .'">' . fgets($f) . '</div>'; //stworzyć diva co obejmuje do jQuery
            $i++ ;
        }

        fclose($f);
        return;
    }
  
    if(isset($_POST["canvas"])){    //wrzucanie do pliku zapisanego canvasa (vhyba)   

        zapiszCanvas();
    }
    wczytajCanvas();

    ?>








</body>
</html>
