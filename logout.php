<?php
session_start();
//Ten plik istnieje tylko dlatego, że nie można usunąć sesji w tym samym pliku tak aby nie istniała od razu
if(isset($_POST["logout"])){
    session_destroy();
}

header('Location: login.php');


?>