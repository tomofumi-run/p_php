<?php

$n = 5.62876;
echo ceil($n) . PHP_EOL; // 6 小数点以下を切り上げ
echo floor($n) . PHP_EOL; // 5 小数点以下を切り捨て
echo round($n) . PHP_EOL; // 6 数値を四捨五入
echo round($n, 2) . PHP_EOL; // 5.63 小数点第二以下を四捨五入

echo mt_rand(1,6) . PHP_EOL; //1から6までの数字がランダムに出力

echo max(3, 9, 4) . PHP_EOL; // 9
echo min(3, 9, 4) . PHP_EOL; // 3

echo M_PI . PHP_EOL; // 円周率
echo M_SQRT2 . PHP_EOL; // 2の平方根