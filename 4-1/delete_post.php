<?php
require_once("db_connect.php");
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

$id = $_GET["id"];

// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
if(empty($id)) {
    header("Location: main.php");
    exit;
}

$pdo = db_connect();

try{
    $sql = "DELETE FROM posts where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    // main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}