<html>
  <head>
    <title></title>
  </head>

  <body>
    <h1>Primer exemple de variables</h1>
    <p>
      <?php

      $name = "Aaron";

      echo "Hola $name, encantat de conèixe't<br/>"; echo "Gràcies per venir!";

      echo nl2br("Hola $name, encantat de conèixe't<br/>.\n"); echo "Gràcies per venir!\n";

      echo "<br/><br/><br/> <span style='color: blue'>echo nl2br permite añadir '\ n' para poder hacer un salto de línea, cosa que con echo normal no lo permite</span>";

      ?>
    </p>
  </body>
</html>