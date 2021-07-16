<?php

require('../app/functions.php');
// $message = trim(filter_input(INPUT_GET, 'message')); //inputタグの値を取得
// $message = $message === ''  ? '...' : $message;


// $name = filter_input(INPUT_GET, 'username');

// $colors = filter_input(INPUT_GET, 'colors', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
// $colors = empty($colors) ? 'none select...' : implode(',', $colors); //implodeで連結した文字列
// $colorFromGet = filter_input(INPUT_GET, 'color') ?? "transparent";
// // setcookie('color', $colorFromGet);
// //?? null合体演算子
// $_SESSION['color'] = $colorFromGet;

include('../app/_parts/_header.php');

?>


<p>Message added!!</p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');