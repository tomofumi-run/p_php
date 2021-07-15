<?php
// namespace Dotinstall\MyPHPApp;


class Post{
  private $text;

  function __construct($text){
    if(strlen($text) <= 3){
      // echo 'Text too short!' . PHP_EOL;
      // exit;
      throw new Exception('Text too short!'); //例外を投げる
    }
    $this->text = $text;
  }

  function show(){
    printf('%s' . PHP_EOL, $this->text);
  }
}
