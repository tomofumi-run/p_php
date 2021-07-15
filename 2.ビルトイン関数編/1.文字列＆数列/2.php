<?php

$input = ' dot_tomofumi ';#前後に空白 14文字
$input = trim($input);# trimで空白除去 12文字

echo strlen($input) . PHP_EOL; #12
echo strpos($input, '_') . PHP_EOL; #3

$input = str_replace('_', '-', $input); # _を-にしてねという指示
echo $input . PHP_EOL;