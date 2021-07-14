<?php

$signal = 'pink';


switch ($signal) {
  case 'red':
    echo 'Stop!' . PHP_EOL;
    break;
  case 'yellow':
    echo 'Caution!' . PHP_EOL;
    break;
  case 'blue':
  case 'green'; //複数選択可能
    echo 'Go!' . PHP_EOL;
    break;
  default: //上記以外の色はデフォルト値が出力
    echo 'Wrong signal' . PHP_EOL;
    break;
}