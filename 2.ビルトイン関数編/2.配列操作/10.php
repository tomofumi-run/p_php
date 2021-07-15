<?php

$ary = [10,20,30,40,50];

$splice = array_splice($ary, 1, 2); //元要素を破壊してしまう
// $splice = array_splice($ary, 1, 2, 100); // 10, 100, 40, 50
// $splice = array_splice($ary, 1, 2, [100, 101]); // 10, 100, 101, 40, 50

print_r($ary); // 10, 40, 50
print_r($splice); // 20, 30