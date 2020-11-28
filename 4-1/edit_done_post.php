<?php
require_once("db_connect.php");
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

$id = $_POST["id"];
$title = $_POST["title"];
// var_dump($title);
$content = $_POST["content"];

$pdo =db_connect();

try {
    $sql = "UPDATE posts SET title = :title, content = :content WHERE id = :id";
    $stmt = $pdo = $pdo->prepare($sql);
    // $stmt->bindParam(":title", $title);
    // $stmt->bindParam(":content", $content);
    // $stmt->bindParam(":id", $id);
    $param_array = array(":title"=>$title, ":content"=>$content, ":id"=>$id);
    $stmt->execute($param_array);
} catch(PDOException $e) {
    echo "データベース接続失敗。" . $e->getMessage();
    die();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>編集完了</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>編集完了</h1>
        <p>ID: <?php echo $id; ?>を編集しました。</p>
        <a href="main.php">ホームへ戻る</a>
    </body>
</html>