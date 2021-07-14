<?php

function sum($a, $b, $c ){
  echo '買い物の合計金額は' . $a + $b + $c . 'です。' . PHP_EOL;
  return $a + $b + $c; //合計値を返す
}

$d = sum(100, 200, 300);
$e = sum(300, 400, 500);

echo $d + $e . PHP_EOL;