<?php
require_once("db_connect.php");
require_once("function.php");

check_user_logged_in();

if(isset($_POST["register"])) {
    if(empty($_POST["title"])) {
        echo "タイトルが未入力です。";
    }
    if(empty($_POST["date"])) {
        echo "発売日が未入力です。";
    }
    if(empty($_POST["stock"])) {
        echo "在庫数が未入力です。";
    }

    if(!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST["stock"];

        $pdo = db_connect();
        try {
            $sql = "INSERT INTO books(title, date, stock) values(:title, :date, :stock)";
            $stmt = $pdo->prepare($sql);
            $param_array = array(":title"=>$title, ":date"=>$date, ":stock"=>$stock);
            $stmt->execute($param_array);

            header("Location: main.php");
            exit();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
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
    <link rel="stylesheet" href="css/register_book.css">
    <title>本 登録がめん</title>
</head>
<body>
    <div class="wrapper">
        <h2>本登録画面</h2>
        <form action="" method="post">
            <input type="text" name="title" placeholder="タイトル">
            <br>
            <input type="text" name="date" placeholder="発売日">

            <p>在庫数</p>
            <select name="stock">
                <option value="select">選択してください</option>
                <?php for($i=0; $i<=30; $i++): ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php endfor ?>
            </select>
            <br>
            <input class="input-button" type="submit" value="登録" name="register">
        </form>
    </div>
</body>
</html>