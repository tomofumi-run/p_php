<?php

$a = [ 3, 4, 8];
$b = [ 4, 8, 12];

$merged = array_merge($a, $b); //配列の連結
$merged_1 = [...$a, ...$b];
print_r($merged); //3,4,8,4,8,12
print_r($merged_1); //同様の結果

$uniques = array_unique($merged); // 一意
print_r($uniques); // 3,4,8,12

$diff1 = array_diff($a, $b); //aにある要素からbにある要素を引く
print_r($diff1); // 3

$diff2 = array_diff($b, $a);
print_r($diff2); // 12

$common = array_intersect($a, $b); //共通要素
print_r($common); // 4,8