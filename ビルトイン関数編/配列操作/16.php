<?php

$scores = [
  'tomofumi' => 80,
  'tarou' => 70,
  'hanako' => 50
];

$keys = array_keys($scores); //keyのみ抽出
print_r($keys);

$values = array_values($scores); //valueのみ抽出
print_r($values);

if (array_key_exists('tomofumi', $scores) === true){ //指定のキーが含まれているか
  echo 'tomofumi is here' . PHP_EOL;
}

if (in_array(80, $scores) === true){ //指定のバリューが含まれているか
  echo 'score 80 is here' .PHP_EOL;
}

echo array_search(70, $scores) . PHP_EOL; //バリューに対応するキーを検索