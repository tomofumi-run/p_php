<?php

declare(strict_types =1); //数字の文字列も受け付けない。強い型付け。デフォルトは弱い型づけ

function showInfo(string $name, int $score): void { // string int と型を指定する、voidは返り値なしの場合に記述。返り値があれば、型指定。
  echo $name . 'くんのテスト結果は、' . $score . '点でした' . PHP_EOL;
  if ($score > 90) {
    echo "$name くんは天才ですね。拍手！！！" . PHP_EOL;
  } elseif($score > 70) {
    echo "$name くんはよく頑張りましたね。しかし、これで満足してはいけません。" . PHP_EOL;
  } else {
    echo "$name くんはミジンコレベルですね。" . PHP_EOL;
  }
}

showInfo("ともふみ", 50); //処理実行
showInfo("ともふみ", "50"); //エラー