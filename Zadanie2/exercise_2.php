<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
        <form action="exercise_2.php" method="POST">
            Wpisz swoj tekst tutaj:<br>
            <input type="text" name="test"></input><br>
            Select:<br>
            <input type="radio" name="size" value="upper" class="size">Duze Litery</input>
            <input type="radio" name="size" value="lower" class="size">Male litery</input>
            <input type="radio" name="size" value="mirror" class="size">Odwrotnosc liter</input>
            <br>
            <input type="submit">WYSLIJ</input>
            <br>
        <?php
        

        if($_SERVER['REQUEST_METHOD'] = "POST"){
            $test = $_POST['test'];
            $selectedSize = $_POST['size'];
            if($selectedSize == 'upper'){
                $testUp = strtoupper($test);
                echo("$testUp");
            }
            if($selectedSize == 'lower'){
                $testDown = strtolower($test);
                echo($testDown);
            }
            if($selectedSize == 'mirror'){
                $array = str_split($test);
                foreach($array as $letter){
                  if(ctype_upper($letter)){  
                    $letter = strtolower($letter);
  
                    echo $letter;
                  }
                  elseif(ctype_lower($letter)){
                    $letter = strtoupper($letter);
      
                    echo $letter;
                  }
                }
            }
            else{
                echo("Nie wprowadziles jeszcze tekstu");
        
            }   
        }   
         
        
        ?>
        </form>
    </body>
</html>
