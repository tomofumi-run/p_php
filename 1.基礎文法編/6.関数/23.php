<?php

function sum($a, $b, $c){
  $total =  $a + $b + $c;

  // if ($total < 0){ // 0より小さい数は0として返す
  //   return 0;
  // } else {
  //   return $total;
  // }

  return $total < 0 ? 0 : $total; //totalが0以下であれば、0を。それ以外はtotalをreturnする。
}

echo sum(100,300,500) . PHP_EOL; //900
echo sum(-1000,300,500) . PHP_EOL; // 0