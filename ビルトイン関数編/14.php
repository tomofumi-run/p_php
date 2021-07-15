<?php

$prices = [100, 200, 300];

$newPrices = array_map(
  // function ($n) { return $n * 1.1;},
  fn($n) => $n * 1.1, $prices //returnであればアロー関数でOK
);

print_r($newPrices);

// (関数,配列)