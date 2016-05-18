<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
      <a href="index.php?start=5&stop=15&jump=3">Od 5 do 15 co 3.</a><br>
      <a href="index.php?start=10&stop=30&jump=2">Od 10 do 30 co 2.</a><br>
      <a href="index.php?start=0&stop=100&jump=5">Od 0 do 100 co 5.</a><br>
    <?php
      include_once "functions.php";
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if( isset($_GET['start']) && isset($_GET['stop']) && isset($_GET['jump'])){
          $start = $_GET['start'];
          $stop = $_GET['stop'];
          $jump = $_GET['jump'];
          podajNumer($start, $stop, $jump);
        }
      }
      else{
          echo("Witaj! Jestem strona liczaca.");
      }
        
        

    ?>
        
    </body>
</html>
