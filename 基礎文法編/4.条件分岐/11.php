<?php

$score = 85;

if ($score >= 80) {
  echo "合格です！" . PHP_EOL;
} elseif ($score >= 60){
  echo "補欠です！" . PHP_EOL;
} else {
  echo "不合格です！" . PHP_EOL;
}