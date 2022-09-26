<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Manejo de cadenas</h1>
    <h2>Ejemplo 2</h2>
    <ul>
      <?php
        $text = "un-dos-tres-quatre-cinc";
        $cadenaSeparada = explode("-", $text); 
        $countCadena = count($cadenaSeparada, COUNT_RECURSIVE);

        for ($i=0; $i < $countCadena; $i++) { 
          echo "<li>" . $cadenaSeparada[$i] . "</li>";
        }
        
      ?>
    </ul>
  </body>
</html>