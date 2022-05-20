<?php
session_start();

if(isset($_POST["delete_project"]) && isset($_POST["delete_name"])){
    $dir = "data/" . $_SESSION["login"] . "/" .  $_POST["delete_name"]; 
    $layers_dir = $dir . "/layers.txt"; 
    unlink($layers_dir);
    rmdir($dir);
}

header('Location: projects.php');

?>