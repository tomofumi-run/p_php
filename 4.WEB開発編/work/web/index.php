<?php

require('../app/functions.php');
define('FILENAME', '../app/messages.txt');

createToken();

if($_SERVER['REQUEST_METHOD'] === 'POST'){ //POSTされたかの判断
  $message = trim(filter_input(INPUT_POST, 'message'));
  validateToken();
  $message = $message !== '' ? $message : '...';
  $fp = fopen(FILENAME, 'a'); //aで追加
  fwrite($fp, $message . "\n"); //メッセージを改行で追加
  fclose($fp);
  header('Location: http://localhost:8080/result.php');
  exit;
}

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

include('../app/_parts/_header.php');

?>

<!-- <form action="result.php" method= "get">
  <b>名前</b><input type="text" name = "username"><br>
  <b>メッセージ</b><input type="text" name = "message">
  <button>Send</button>
</form>

<form action="result.php" method="get">
  <textarea name="message" id="" cols="30" rows="10"></textarea>
  <button>Send</button>
</form>

<form action="result.php" method ="get">
  <select name="colors[]" multiple>
    <option value="orange">Orange</option>
    <option value="pink">Pink</option>
    <option value="green">Green</option>
  </select>
  <button>Send</button>
</form>

<form action="result.php" method ="get">
  <label><input type="checkbox" name="colors[]" value="ichirou">イチロー</label>
  <label><input type="checkbox" name="colors[]" value="jirou">二郎</label>
  <label><input type="checkbox" name="colors[]" value="saburou">三郎</label>
  <button>Send</button>
</form>

<form action="result.php" method ="get">
  <label>背景色を変えよう</label>
  <label><input type="radio" name="color" value="green">緑</label>
  <label><input type="radio" name="color" value="blue">青</label>
  <label><input type="radio" name="color" value="red">赤</label>
  <button>Send</button>
  <a href="reset.php">Cookieを削除する</a>
</form>
 -->

<ul>
  <?php foreach ($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
</ul>

<form action="" method="post">
  <input type="text" name="message">
  <button>Send</button>
  <input type="hidden" name = "token" value = "<? h($_SESSION['token']); ?>">
</form>

<?php

include('../app/_parts/_footer.php');