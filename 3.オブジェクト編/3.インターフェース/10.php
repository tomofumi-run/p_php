<?php

trait LikeTrait {
  // 共通のコードを入れる
  private $likes = 0;
  public function like(){
    $this -> likes++;
  }
}

interface LikeInterface {
  public function like();
}

abstract class BasePost{
  protected $text;

  public function __construct($text){
    $this->text = $text;
  }

  abstract public function show();
}

class Post extends BasePost implements LikeInterface{
  use LikeTrait; //Traitを使用する
  public function show(){
    printf('%s [%dいいね]' . PHP_EOL, $this->text, $this-> likes);
  }
}

class SponsoredPost extends BasePost{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }

  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

class PremiumPost extends BasePost implements LikeInterface{
  use LikeTrait; //Traitを使用する
  private $price;

  public function __construct($text, $price){
    parent::__construct($text);
    $this->price = $price;
  }

  public function show(){
    printf('%s (%dいいね)[%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');
$posts[3] = new PremiumPost('hello there', 300);

$posts[0] -> like();
$posts[3] -> like();

function processPost(BasePost $post)
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}