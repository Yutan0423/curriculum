<?php
require_once("db_connect.php");

session_start();

if(isset($_POST["login"])) {
    if(empty($_POST["name"])) {
        echo "名前が未入力です。";
    }
    if(empty($POST["password"])) {
        echo "パスワードが未入力です。";
    }

    if(!empty($_POST["name"]) && !empty($_POST["password"])) {
        // html内の記号が意味をもたないようにする。
        // ENT_QUOTESは”と’も意味をもたせないようにする
        echo "eee";
        $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
        $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

        $pdo = db_connect();
        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->execute();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }

        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // データベースのパスワードと入力したパスワードが同じか確かめる
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            if(password_verify($password, $row["password"])) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_name"] = $row["name"];
                header("Location: main.php");
                exit;
            } else {
                echo "パスワードに誤りがあります。";
            }
        } else {
            echo "ユーザー名かパスワードに誤りがあります。";
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
    <link rel="stylesheet" href="css/login.css">
    <title>ログイン画面</title>
</head>
<body>
    <div class="wrapper">
        <div class="login-header">
            <h2 class="login-title">ログイン画面</h2>
            <a class="create_account_link" href="create_account.php">新規ユーザー登録</a>
        </div>
        
        <form action="" method="post">
            <input type="text" name="name" placeholder="ユーザー名">
            <br>
            <input type="password" name="password" placeholder="パスワード">
            <br>
            <input class="input-button" type="submit" value="ログイン" name="login">
        </form>
    </div>
</body>
</html>