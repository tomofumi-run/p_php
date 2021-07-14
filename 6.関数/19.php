<?php

function showAd($message = 'Ad'){ // 仮引数
  echo '----------' . PHP_EOL;
  echo '--- ' . $message . ' ---' . PHP_EOL; //'.  $hoge .'で引数を入れ込む
  echo '----------' . PHP_EOL;
}


echo 'Takemichi is weak' . PHP_EOL;
showAd('Header Ad'); //実引数
echo 'Mikey is strong' . PHP_EOL;
showAd('Footer Ad');
echo 'Doraken is cool' . PHP_EOL;
showAd(); // デフォルトの値が代入されている