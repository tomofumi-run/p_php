<?php

$ary = [1,2,3,4,5];

var_dump($ary); //型と中身が見れる
print_r($ary); //var_dumpをスッキリさせた型で見れる



$ary = [ // keyとvalue
  'first'  => 90,
  'second' => 40,
  'third'  => 100,
];

echo $ary['third'] . PHP_EOL; // 100

