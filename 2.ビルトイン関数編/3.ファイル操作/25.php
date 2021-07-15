<?php

if(file_exists('data/saburou.txt') === false){
  echo 'さぶろーファイルはないね。' . PHP_EOL;
  exit;
}

// exitで以下の処理がされなくなる。

if (file_exists('data') === true){
  echo 'データあるよ' . PHP_EOL;
}

if (is_writable('data/tomofumi.txt') === true){
  echo 'データの書き込みできるよ' .PHP_EOL;
}

if (is_readable('data/tomofumi.txt') === true){
  echo 'データの読み込みできるよ' .PHP_EOL;
}