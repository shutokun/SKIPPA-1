<?php
	require_once __DIR__ . '/../header.php';
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
    <p>パスワードの編集</p>
</head>
<body>
<form method="POST" action="./signup_db.php">
    現在のパスワード
    <input type="password" name="passward" value=""><br>
    新しいパスワード
    <input type="password" name="newpassward" value=""><br>
    <br>
    <a href="mypage.php">変更する</a>
    <p align="right"><a href = "mypage.php">戻る</a></p>
</body>
<?php
	require_once __DIR__ . '/../footer.php';
?>