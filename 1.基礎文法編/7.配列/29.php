<?php

$moreScores = [
  55,
  72,
  'Tom',
  [10,20,30],
];

$scores = [
  90,
  40,
  ...$moreScores, //配列の中に配列がが入ってしまうので、 ... で展開させる。
  100,
];

// print_r($scores);
echo $scores[5][2] . PHP_EOL; //配列の5番目の2番目 => 30が出力