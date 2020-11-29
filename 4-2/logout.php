<?php
session_start();

$_SESSION[] = array();

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト画面</title>
</head>
<body>
    <h2>ログアウト画面</h2>
    <p>ログアウトしました。</p>
    <a href="login.php">ログイン画面に戻る</a>
</body>
</html>