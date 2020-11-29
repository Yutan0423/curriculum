<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();

$pdo = db_connect();

try {
    $sql = "SELECT * FROM books";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>在庫一覧画面</title>
</head>
<body>
    <div class="wrapper">
        <h2>在庫一覧画面</h2>
        <div class="link-button">
            <a class="register_book" href="register_book.php">新規登録</a>
            <a class="logout" href="logout.php">ログアウト</a>
        </div>
        <table class="books-table">
            <tr class="books-column">
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td></td>
            </tr>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row["title"] ?></td>
                    <td><?php echo $row["date"] ?></td>
                    <td><?php echo $row["stock"] ?></td>
                    <td><a class="delete" href="delete.php?id=<?php echo $row["id"] ?>">削除</a></td>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
</body>
</html>