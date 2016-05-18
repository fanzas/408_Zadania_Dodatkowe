<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        
        ?>
    </head>
    <body>
        <?php
        
        session_start();

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            if(isset($_SESSION['counter'])){
                $counter = $_SESSION['counter']; 
                if(isset($_GET['add'])){
                    $_SESSION['counter'] = $_SESSION['counter'] + 1;
                }
                if(isset($_GET['substract'])){
                    $_SESSION['counter'] = $_SESSION['counter'] - 1;
                }
                if(isset($_GET['delete'])){
                    $_SESSION['counter'] = 0;
                }
            }
        }
        
        
       
        echo("licznik wynosi:".$_SESSION['counter']);
        ?>
        <br>
        <a href="exercise_3.php?add">Zwieksz wartosc licznika.</a><br>
        <a href="exercise_3.php?substract">Zmniejsz wartosc licznika.</a><br>
        <a href="exercise_3.php?delete">Wyzeruj licznik.</a><br>
        
        
        
    </body>
</html>
