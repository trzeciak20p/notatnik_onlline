<?php
// error_reporting(0);
echo $_POST["canvas"];

$save = $_POST["canvas"];
// $f = fopen("data/" . $_SESSION["login"]. "/". $_POST["open_project"]. "/canvas1.jpg", "r");
$dir = "data/" . $_SESSION["login"]. "/ae/canvas1.txt"; //
echo $dir;
$f = fopen($dir, "w+");
fwrite($f, $_POST["canvas"]);





?>
<div id='canvas_save' style='background-color: red;'> <?php echo @$_POST["canvas"] ?> </div>