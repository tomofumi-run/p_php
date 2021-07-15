<?php

$numbers = range(1, 10); //1から10の数

$evenNumbers = array_filter(
  $numbers,
  // function($n){
  //   if ($n % 2 === 0){
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }
  fn($n) => $n % 2 === 0
);

print_r($evenNumbers);