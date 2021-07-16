<?php

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function createToken(){
  if (!isset($_SESSION['token'])){ //セッショントークンがなければ生成
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
}

function validateToken(){
  if (
    empty($_SESSION['token']) || //セッションのトークンが空、もしくは相違がある場合
    $_SESSION['token'] !== filter_input(INPUT_POST, 'token')
    ){
      exit('Errorですぜ！');
    }
}

session_start();