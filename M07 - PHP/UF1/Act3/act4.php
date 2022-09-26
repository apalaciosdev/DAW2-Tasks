<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Página de bienvenida</h1>

    <?php
      $hour = date('H');

      if($hour >= 8 && $hour <= 13){
        echo "Bon dia, ";
      }
      else if($hour >= 14 && $hour <= 20){
        echo "Bona tarda, ";
      }
      else if(($hour >= 21 && $hour <= 24) && ($hour >= 0 && $hour <= 7)){
        echo "Bona nit, ";
      }

      echo " María"
    ?>
  </body>
</html>