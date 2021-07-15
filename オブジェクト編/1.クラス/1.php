<?php
// オブジェクトなしのSNS
$posts = [];
$posts[0] = ['text' => 'こんにちは。私は桃太郎です。', 'likes' => 0];
$posts[1] = ['text' => 'こんにちは。私は犬です。', 'likes' => 10];

// print_r($posts);

function show($post) {
  printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
  // 文字列と数値を指定
}

show($posts[0]);
show($posts[1]);

// こんにちは。私は桃太郎です。 (0)
// こんにちは。私は犬です。 (10)