<?php

// function sum($a, $b, $c){
//   return $a + $b + $c;
// }

$sum = function ($a, $b, $c){ //無名関数 関数自体を別の関数の引数にして渡すことができる。
  return $a + $b + $c;
};

echo $sum(100,200,300) . PHP_EOL;