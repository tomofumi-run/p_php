<?php

$fp = fopen('names.txt', 'a'); //追記モード

fwrite($fp, "I LOVE JIRO RAMEN !!!! \n");

fclose($fp);