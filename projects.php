<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png" sizes="32X32">
</head>

<body>

    <nav>
        <ul>
            <a href="index.php"><li>Strona Główna</li></a>
            <a href="forum.php"><li>Prace</li></a>
            <a href="projects.php"><li>Twoje Projekty</li></a>
        </ul>
        <?php 
        require('nav_login_icon.php'); 
        ?>
    </nav>

    <header>
        <h1>Projekty</h1>
    </header>

    <main>
        <article id="search_field">
            <label>
                <h2>Wyszukaj</h2> <input type="text" id="search">
            </label>
    
        </article>
    
        <article id="projects">
            <?php
                require("projects_loader.php");
            ?>
        </article>
    
        <article id="shared_projects">
            <h2>Współtworzone projekty</h2>
    
    
        </article>
    </main>

</body>
</html>
