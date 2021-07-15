<?php

$input = '20200320Item-A 1200';
$input = substr_replace($input, 'Item-B', 8,6);

$date = substr($input, 0, 8); # 0文字目から8桁
$product = substr($input, 8, 6); # 8文字目から6桁
$amount = substr($input, 15); # 15文字目から最後まで

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL; # 大きめな数値を見やすくする

