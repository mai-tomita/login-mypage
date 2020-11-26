<?php

session_start();

if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

    <head>
    <meta charset="utf-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
<body>
<header>
<img src="4eachblog_logo.jpg">
<div class="loglog">
    <a href="login.php">ログイン</a>
</div>
</header>    

<main>
<div class="login">

<form action="mypage.php" method="post">
    
    <div class="moji">
    メールアドレス</div>
    <input type="text" size=40 value="<?php if(isset($_COOKIE['login_keep'])) {echo $_COOKIE['mail']; }?>" name="mail">
    
    
  <div class="moji">
    パスワード</div>
        <input type="password" size=40  value="<?php if(isset($_COOKIE['login_keep'])) {echo $_COOKIE['password']; } ?>" name="password">
    
    
  <div class="moji">
      <input type="checkbox" name="login_keep" value="login_keep" <?php if(isset($_COOKIE['login_keep'])){echo "checked='checked'";}?>>ログイン状態を保持する</div>

    
<div class="buttonplace">
    <input type="submit" class="button" value="ログイン">
    </div>

    </form>
    </div>
    
    </main>
    
    
<footer>
 ＠2018 InteNous inc. All rights reserved 
</footer>
</body>
</html>