
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
    
    <div class="error">メールアドレスまたはパスワードが間違っています。</div>

<form action="mypage.php" method="post">
    
    <div class="moji">
    メールアドレス</div>
    <input type="text" size=40 name="mail">
    
    
  <div class="moji">
    パスワード</div>
        <input type="text" size=40 name="password">

    
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