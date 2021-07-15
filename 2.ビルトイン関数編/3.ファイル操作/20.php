<?php

$fp = fopen('names.txt', 'w'); //書き込みモード 'w'

fwrite($fp, "Tomofumi\n"); //書き込まれる内容
fclose($fp); //書き込み終了