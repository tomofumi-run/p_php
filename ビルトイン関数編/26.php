<?php

echo time() . PHP_EOL; //1626312731

echo date('Y-m-d l') . PHP_EOL;
//時間の取得 2021-07-15 Thursday time()省いてもok

echo date('Y-m-d l', mktime(0, 0, 0, 5, 1,2020)) . PHP_EOL;
//時間操作の取得 2020-05-01 Friday
// mktime(時,分,秒,月,日,年)と指定

echo date('Y-m-d l', strtotime('2021-07-07')) . PHP_EOL;
echo date('Y-m-d l', strtotime('2021-07-07 + 1 day')) . PHP_EOL;
// 文字列からUNIXタイムスタンプを作れる。