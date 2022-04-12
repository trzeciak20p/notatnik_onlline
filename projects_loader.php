<?php

if( !isset($_SESSION["login"]) ){

    echo "<a href='login.php'><h3>Zaloguj się aby zobaczyć swoje projekty!</h3></a>";

}else{

    echo '
    <h2>Twoje projekty</h2>

    <form method="POST" action="editor.php">
        <div class="pls_center">
            <div>
                <input type="text" name="project_name" required="required">
                <input type="submit" name="new_project">
            </div>
    ';

    

    echo '

        </div>
    </form>';        

}