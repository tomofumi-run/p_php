<?php

$contents = "tomofumi\njiro\nlove\n";
file_put_contents('ramens.txt', $contents); //ファイル作成可能

$contents = file_get_contents('ramens.txt');
echo $contents; //ファイル情報を取得

$lines = file('ramens.txt'); //1行ずつ配列として取得
$lines = file('ramens.txt', FILE_IGNORE_NEW_LINES); //改行なしで取得
var_dump($lines);