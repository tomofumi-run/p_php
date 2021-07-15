<?php

$rate = 2; //関数の外で定義された変数は使えない。 グローバルスコープ

function sum($a, $b, $c ){
  // global $rate;
  $rate = 3; //ローカルスコープ
  echo '買い物の合計金額は' . $a + $b + $c . 'です。' . PHP_EOL;
  return ($a + $b + $c) * $rate;
}

$d = sum(100, 200, 300);
$e = sum(300, 400, 500);

echo $d + $e . PHP_EOL; //ローカルスコープが使われた計算結果