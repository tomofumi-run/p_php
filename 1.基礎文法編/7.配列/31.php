<?php

function getStats(...$numbers){
  $total = 0;
  foreach($numbers as $number){
    $total += $number;
  }
  return [$total, $total / count($numbers)]; //配列で返す。
}

// print_r(getStats(1,3,5,));

list($sum, $avg) = getStats(1,3,5);

echo $sum . PHP_EOL; //9
echo $avg . PHP_EOL; //3