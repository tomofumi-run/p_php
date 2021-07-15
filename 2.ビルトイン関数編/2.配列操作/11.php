<?php

$ary = [40, 50, 60, 20];

sort($ary); //小さい順に配列が組み直される
print_r($ary);

shuffle($ary); //要素がシャッフルされる
print_r($ary);

$random = array_rand($ary, 2); //aryから2個ランダムに抽出
echo $ary[$random[0]] . PHP_EOL; // 1つ
echo $ary[$random[1]] . PHP_EOL; // 2つ