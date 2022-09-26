<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Conversión euros/pesetas</h1>
    <table>
      <tbody>
        <?php
          for ($i=1; $i < 11; $i++) { 
            echo "<tr><td>$i € = " . ($i * 166.386) . " pts</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>