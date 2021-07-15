<?php

declare(strict_types = 1); //強い型を付ける

class Post{
  private string $text; //型付け(弱い) 数値も文字列に変換できてしまう

  public function __construct(string $text){
    $this->text = $text;
  }

  public function show(){
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts = [];
$posts[0] = new Post(5); //errorが発生する
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();