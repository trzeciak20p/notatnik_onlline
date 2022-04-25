<?php
error_reporting(0);

$save = $_POST["canvas"];
// $f = fopen("data/" . $_SESSION["login"]. "/". $_POST["open_project"]. "/canvas1.jpg", "r");
$dir = "data/" . $_SESSION["login"]. "/ae/canvas1.txt";
echo $dir;
$f = fopen($dir, "a");
fwrite($f, "japko");
echo $_POST["canvas"];




?>
<div id='canvas_save' style='background-color: red;'> <?php @$_POST["canvas"] ?> </div>