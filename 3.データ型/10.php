<?php

$a = 'hello';
$b = "hello2";

$c = -1.3;
$d = null;

$e = true;


// var_dumpで変数について調べられる
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

// 型の変換（キャスト）
$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);