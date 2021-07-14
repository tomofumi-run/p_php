<?php

$name = 'Apple';
$score = 32.246;
// [Apple][32.246]
$info = "[$name][$score]";

$info = sprintf("[%15s][%10.2f]", $name, $score); #文字列で表示
// [          Apple][     32.25]
// [%15s] stringクラス 15文字
// [%10.2f] floatクラス 10文字 小数点以下2文字

$info = sprintf("[%-15s][%010.2f]", $name, $score);
// [Apple          ][0000032.25]
// - で左詰め（何もつけないと右寄り）
// floatクラスの部分に0をつけることで開いている場所に0
echo $info . PHP_EOL;
