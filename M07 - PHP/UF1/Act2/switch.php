<?php

  $array = [
    "Marta" => "ASIX1",
    "Iker" => "ASIX2",
    "Cristian" => "DAW1",
    "Aaron" => "DAW2",
    "Leonarda" => "DAM2",
  ];


  $nomIntroduit = "Aaron";
  echo "Nombre introducido: $nomIntroduit <br><br>";
  

  switch ($array[$nomIntroduit] ?? null) {
    case 'ASIX1':
      echo "Alumne de sistemes de primer";
      break;
    
    case 'ASIX2':
      echo "Alumne de sistemes de segon";
      break;
    
    case 'DAW1':
      echo "Alumne de Web de primer";
      break;
    
    case 'DAW2':
      echo "Alumne de Web de segon";
      break;
    
    case 'DAM2':
      echo "Alumne deMultiplataforma de segon";
      break;
    
    default:
      echo "No és alumne de cicle superior d'informàtica";
      break;
  }

?>
