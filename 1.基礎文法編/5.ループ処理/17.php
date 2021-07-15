<?php

for($i = 1; $i <= 10; $i++){
  if($i % 2 === 0){
    continue;
  }
  echo "1〜10までの奇数は [$i] です。" . PHP_EOL;
}