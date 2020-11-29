<?php
require_once("db_connect.php");

if(isset($_POST["signUp"])) {

    if(empty($_POST["name"])) {
        echo "ユーザー名が未入力です";
    }
    if(empty($_POST["password"])) {
        echo "パスワードが未入力です";
    }

    if(!empty($_POST["name"]) && !empty($_POST["password"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $pdo = db_connect();
        try {
            $sql = "INSERT INTO users(name, password) values(:name, :password)";
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":password", $password_hash);
            $stmt->execute();
            echo "登録が完了しました。";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage;
            die();
        }

    }



} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/create_account.css">
    <title>ユーザー登録画面</title>
</head>
<body>
    <div class="wrapper">
        <h2>ユーザー登録画面</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="ユーザー名">
            <br>
            <input type="text" name="password" placeholder="パスワード">
            <br>
            <input class="input-button" type="submit" value="新規登録" name="signUp">
        </form>
    </div>
</body>
</html>