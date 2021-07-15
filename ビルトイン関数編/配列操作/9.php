<?php

$ary = [1,2,3,4,5];

$partial = array_slice($ary, 1, 2); //$aryの1番目から2番目までスライス
$partial = array_slice($ary, -2); //-からでも可能
print_r($ary); // 1,2,3,4,5
print_r($partial); // 2,3
