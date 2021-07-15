<?php

class Post {

  // プロパティ
  public $text; // this
  public $likes; // this

  // コンストラクタ
  // public function __construct($textFromNew, $likesFromNew){
  //   $this -> text = $textFromNew;
  //   $this -> likes = $likesFromNew;
  // }

  public function __construct($text, $likes){
    $this -> text = $text;
    $this -> likes = $likes;
  }
  public function show() {
    printf('%s (%d)' . PHP_EOL, $this -> text, $this -> likes);
  }
}

$posts = [];
$posts[0] = new Post('Hello Boy!!', 10);
$posts[1] = new Post('Hey Girl!!', 0);

$posts[0] -> show();
$posts[1] -> show();