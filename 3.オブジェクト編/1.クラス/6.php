<?php

class Post{
  private $text;
  private static $count = 0; //staticクラスプロパティを設定
  public const VERSION = 0.1; //クラスに紐づいた定数 staticはなし

  public function __construct($text){
    $this->text = $text;
    self::$count++; //クラスプロパティはself::で扱える
  }

  public function show(){
    printf('%s' . PHP_EOL, $this->text);
  }

  public static function showInfo(){ //クラスメソッド
    printf('Count: %d' . PHP_EOL, self::$count);
    printf('Version: %.1f' . PHP_EOL, self::VERSION);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();


Post::showInfo();
echo Post::VERSION . PHP_EOL;