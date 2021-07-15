<?php

use Dotinstall\MyPHPApp as MyPHP; //名前空間に名前をつける


require('Post.php'); // 処理が止まる
// include('Post.php'); // 処理は止まらない

class Post{} //上記と被るのでエラーになる。名前空間を作成。

// spl_autoload_register(function ($class){
//   require($class . '.php'); // newをした時にクラスが読み込まれてなかったら呼ばれる。
// });

$posts[0] = new MyPHP\Post('hello');
$posts[1] = new MyPHP\Post('hello again');

foreach ($posts as $post) {
  $post->show();
}