<?php

// file_put_contents('data/tomofumi.txt', "i am tomofumi \n");
// file_put_contents('data/jiro.txt', "i am jiroramen \n");

// $dp = opendir('data'); //ファイルを開く
// while(($item = readdir($dp)) !== false){ // 開いたファイルを読み込む
//   if ($item === '.' || $item === '..') { //ピリオドなどはスキップさせたい
//     continue;
//   }
//   echo $item . PHP_EOL;
// }

foreach (glob('data/*.txt') as $item ){ //globで見つかった結果を配列で返す。
  // echo $item . PHP_EOL; //data/~~.txtを取得
  echo basename($item) . PHP_EOL; //~~txtを取得
}