<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/'; #正規表現

preg_match($pattern, $input, $matches); //最初にマッチしたものを格納
preg_match_all($pattern, $input, $matches); //全てを格納
# 検索したいパターン,検索したい文字列,検索した結果を格納する変数
print_r($matches);

$input = preg_replace($pattern,'**-****-****',$input);
# パターンと置換後の文字列、検索したい文字列を渡す。
echo $input . PHP_EOL;