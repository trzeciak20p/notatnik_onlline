<?php

if( isset($_POST["canvas"]) ){

    $save = $_POST["canvas"];
    // $f = fopen("data/" . $_SESSION["login"]. "/". $_POST["open_project"]. "/canvas1.jpg", "r");
    $f = fopen("data/" . $_SESSION["login"]. "/". $_POST["open_project"]. "/canvas1.jpg", "r+");
    fwrite($f);
    fwrite($f, $_POST["canvas"]);

}


?>
<div id='canvas_save' style='background-color: red;'> <?php @$_POST["canvas"] ?> </div>