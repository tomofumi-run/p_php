<?php

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

$scores = array_column($data, 'score'); // keyの値だけ抽出
$names = array_column($data, 'name'); // keyの値だけ抽出

// print_r($scores);
// print_r($names);

array_multisort(
  $scores,// scoresを順番に
  $names,// namesを順番に
  $data // 最後に動かした箇所のみを順番に
);

print_r($data);

array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC, // scoresを逆順番に
  $names, SORT_DESC, SORT_STRING, // namesを逆順番に
  $data //
);