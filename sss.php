<?php
if ($_post) {echo "こんにちは、".$_post['name']."さん";
  // code...
}else {
  // code...
}
?>

<p>お名前を入力してください。</p>

<form  method="post">
  <input type="text" name="name">
  <input type="submit" value="送信する">

</form>
