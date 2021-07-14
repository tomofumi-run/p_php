<?php
function sum(...$numbers){ //可変長引数 ... で対応する
  $total = 0;
  foreach($numbers as $number){
    $total += $number;
  }

  return $total;
}

echo sum(10,20,30,40,50) . PHP_EOL;