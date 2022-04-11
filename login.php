<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
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
    
    <main class="pls_center">
        
        <form class="f_border" method="POST" action="login_validator.php">

            <label>
                <h2>Login</h3>
                <input type="text" name="login" required="required">
            </label>
            <label>
                <h2>Hasło</h3>
                <input type="password" name="password" required="required">
            </label>
            
            <input type="submit" name="submit" value="Zaloguj">
            <br/><br/><br/>
            <a href="register.php">Nie masz konta? Zarejestruj się.</a>

        <form>

    </main>

</body>
</html>
