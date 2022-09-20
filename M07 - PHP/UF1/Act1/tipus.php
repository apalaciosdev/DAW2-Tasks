<?php 
  $x = 10;
  $y = "10";
  $z = $x * 2;
  $a = "23 anys";
  $b = $x + 11;
  $c = 1.234;
  $d = 1.2e3;
  $e = 7E-10;
  $f = NULL;

  echo nl2br("x => " . gettype($x) . "\n");
  echo nl2br("y => " . gettype($y) . "\n");
  echo nl2br("z => " . gettype($z) . "\n");
  echo nl2br("a => " . gettype($a) . "\n");
  echo nl2br("b => " . gettype($b) . "\n");
  echo nl2br("c => " . gettype($c) . "\n");
  echo nl2br("d => " . gettype($d) . "\n");
  echo nl2br("e => " . gettype($e) . "\n");
  echo nl2br("f => " . gettype($f) . "\n");
?>