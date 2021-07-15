<?php

$fp = fopen('names.txt', 'r') ; // 読み込みr
$contents = fread($fp, filesize('names.txt'));
fclose($fp);

echo($contents) . PHP_EOL;

$fp = fopen('names.txt', 'r') ;
while (($line = fgets($fp)) !== false){
  echo $line; // 1行ずつ出力させる。
}
fclose($fp);