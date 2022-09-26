<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
        /* https://github.com/cawilff/cuadernoEjercicios/blob/master/19_tabla3.php*/
    
        function show($valor){
            $valor < 0
                ? $color="red" 
                : $color="blue";
           
            echo "<td><font color='$color'>$valor</font></td>\n";
        }
        echo"<table border='1'>";
        
        for($x=0;$x<=2.01;$x+=.01) {
            echo"<tr>" . show($x) . show(sin($x)) . show(cos($x)) . "</tr>";
        }
    ?>
  </body>
</html>