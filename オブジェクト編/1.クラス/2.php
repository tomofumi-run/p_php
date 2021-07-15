<?php

class Post {

  // プロパティ
  public $text; // this
  public $likes; // this

  // メソッド
  public function show() {
    printf('%s (%d)' . PHP_EOL, $this -> text, $this -> likes);
  }
}

$posts = [];
$posts[0] = new Post();
$posts[0] -> text = 'こんにちは、私は雉です。';
$posts[0] -> likes = 0;

$posts[1] = new Post();
$posts[1] -> text = 'こんにちは、私は猿です。';
$posts[1] -> likes = 5;

$posts[0] -> show();
$posts[1] -> show();

// こんにちは、私は雉です。 (0)
// こんにちは、私は猿です。 (5)
