<?php

$scores = [
  'first'  => 90,
  'second' => 40,
  'third'  => 100,
];

// foreach ($scores as $value){
//   echo $value . PHP_EOL; //valueの値のみ出力
// }

foreach ($scores as $k => $v){
  echo $k . '-' . $v . PHP_EOL; //keyとvalueどちらも出力
}