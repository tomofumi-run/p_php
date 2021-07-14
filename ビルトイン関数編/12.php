<?php

$scores = array_fill(0, 5, 10); //0~4に10が入っている。
$scores = range(1, 10); // 0~9に1~10が入ってる。
$scores = range(1, 10, 2); // 0->1 1->3 2->5 と2刻み

print_r($scores); // 1,3,5,7,9

echo array_sum($scores) . PHP_EOL; // 配列の合計
echo max($scores) . PHP_EOL; // 一番大きい数
echo min($scores) . PHP_EOL; //一番小さい数
echo array_sum($scores) / count($scores) . PHP_EOL; //平均値
