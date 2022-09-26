<?php
  $randomNumber = rand(0, 50);

  echo "NÚMERO: $randomNumber <br><br>";

  
  if($randomNumber === 42){
    echo "Quaranta dos, va dir Pensament Profund amb infinita majestuositat i calma. La Resposta a la Gran Pregunta de la Vida, l'Univers i Tota la Resta.";
  }
  
  if(($randomNumber % 3) === 0){
    echo "Super3, fiu...";
  }

  else{
    echo "Don't panic!";
  }
?>