<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <h1 class="title">PHPで掲示板アプリ</h1>
  <hr>
  <div class="bordWrapper">
    <section>
      <article>
        <div class="nameArea">
          <span>名前：</span>
          <p class="username">ChiakiCode</p>
          <time>:2023/11/19</time>
        </div>
      </article>
    </section>
    <form class="formWrapper">
      <div>
        <input type="submit" value="書き込む">
        <label for="">名前</label>
        <input type="text" name="username">
      </div>
    </form>
  </div>
</body>
</html>