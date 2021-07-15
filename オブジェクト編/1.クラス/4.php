<?php
// アクセス修飾をして制限を明確にする = カプセル化
class Post
{
  public $text;
  private $likes = 0; // イイね数は最初は0であって欲しい
  // private $likes = 0; // アクセス修飾子 privateはこのクラスのみ。
  // publicは全ての場所で扱える

  public function __construct($text){
    $this->text = $text;
  }

  public function show(){
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  public function like(){
    $this -> likes ++;
    if ($this -> likes > 100){
      $this -> likes = 100;
    }
  }
}

$posts = [];
$posts[0] = new Post('hello Youtube');
$posts[1] = new Post('hello Youtube again');

// $posts[0] -> likes++; //posts[0]に対してlikesを1増やす記述
$posts[0] -> like();

$posts[0]->show();
$posts[1]->show();