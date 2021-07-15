<?php

$d = [2021, 07, 14];
echo implode('-', $d) . PHP_EOL; //implode('文字列', 配列)
// 2021-7-14

$t = '17:32:45';
print_r(explode(':', $t)); //explodeで配列へ変換
// Array(
//     [0] => 17
//     [1] => 32
//     [2] => 45
// )