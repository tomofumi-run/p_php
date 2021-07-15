<?php

$ary = [3,4,5];
array_unshift($ary, 0, 1, 2); //先頭から要素を追加
array_push($ary, 6, 7); //末尾に要素を追加
$ary[] = 8; //末尾に追加

array_shift($ary); //先頭の要素を削除
array_pop($ary); //末尾の要素を削除

print_r($ary); //1,2,3,4,5,6,7