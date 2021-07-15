<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

sort($scores); //小さい順
print_r($scores); //キーが削除されて連番になる。

rsort($scores); //大きい順
print_r($scores); //キーが削除されて連番になる。

asort($scores); //小さい順
print_r($scores); //キーが保持される

arsort($scores); //大きい順
print_r($scores); //キーが保持される

ksort($scores); //アルファベット順
print_r($scores); //キーが保持される

krsort($scores); //アルファベットの逆
print_r($scores); //キーが保持される