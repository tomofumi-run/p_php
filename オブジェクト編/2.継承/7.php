<?php

class Post{
  protected $text; //親と子クラスで使える

  public function __construct($text){
    $this->text = $text;
  }

  public function show(){ // publicの前にfinalをつけることでオーバーライドを禁止させる
    printf('%s' . PHP_EOL, $this->text);
  }
}

class SponsoredPost extends Post { //Postクラスの継承
  private $sponsor;

  public function __construct($text, $sponsor){
    // 親クラスのコンストラクタを使用
    parent::__construct($text);
    $this -> sponsor = $sponsor;
  }

  public function showSponsor(){
    printf('%s' . PHP_EOL, $this->sponsor);
  }

  // オーバーライド override
  public function show(){
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor); //privateにされていると使えないので親クラスのアクセスを変更させる
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('Sponsor', 'DMMWEBCAMP');

$posts[0]->show();
$posts[1]->show();
$posts[2]->show(); //ちゃんと呼び出せる
$posts[2]->showSponsor(); //独自メソッド