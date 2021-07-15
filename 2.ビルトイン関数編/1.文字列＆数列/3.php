<?php

$input = ' こんにちは ';
$input = trim($input);

echo mb_strlen($input) . PHP_EOL; //5 -> 15!?
echo mb_strpos($input, 'に') . PHP_EOL;//2 -> 6!?

$input = str_replace('にち', 'ばん', $input); //こんばんは
echo $input . PHP_EOL;

// 日本語を扱うにはマルチバイトに対応が必要
// mbを付与してあげる