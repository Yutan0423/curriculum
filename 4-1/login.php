<?php
require_once("db_connect.php");
session_start();

if(isset($_POST["login"])) {

    if(empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    if(empty($_POST["pass"])) {
        echo "パスワードが未入力。";
    }

    if(!empty($_POST["name"]) && !empty($_POST["pass"])) {
        // ENT_QUOTESは、"や’も変換対象に含める
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $pass = htmlspecialchars($_POST["pass"], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try{
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
        // 入力された値と引っ張ってきた値が同じか判定しています。
        if(password_verify($pass, $row["password"])){
            // セッションに値を保存
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["name"];
            // main.phpにリダイレクト
            header("Location: main.php");
            exit;
        } else {
            echo "パスワードに誤りがあります。";
        }
    } else {
        echo "ユーザー名かパスワードに誤りがあります。";
    }

}
?>


<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログインページ</title>
    </head>
    <body>
        <h2>ログイン画面</h2>
        <form method="post" action="">
            名前：<input type="text" name="name" size="15"><br><br>
            パスワード：<input password="text" name="pass" size="15"><br><br>
            <input type="submit" value="ログイン" name="login">
        </form>
    </body>
</html>