<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnPaint</title>
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
        <!-- <a href="login.php">Zaloguj się</a> -->
    </nav>

    <main>
        
    <?php
        if( @$_SESSION["prime"] != 2){
            echo '       
                <section>
                    <h2>Ulepsz do wersji premium</h2>
                    Dzięki subskrybcji ultra premium PRO max S++ ௹ lite 「FREE」otrzymasz:
                    <ul>
                        <li>Możliwośc współdzielenia projektów</li>
                        <li>3 dodatkowe warsty w edytorze</li>
                        <li>Nowe wspaniałe pędzle</li>
                    <ul>
                    A to wszystko już za jedyne: 2137 pesos syberyjskich/miesiąc! <br/>
                    Nie przegap okazji

                </section>
                ';
        }

     ?>

        <article>
            <h2>Obserwowani</h2>

        </article>

        <article>
            <h2>Popularne prace</h2>
            <!-- najbardzie polubiane prace -->



        </article>
    </main>

</body>
</html>
