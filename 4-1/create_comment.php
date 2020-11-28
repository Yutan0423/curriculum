<?php
require_once("db_connect.php");
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

if(isset($_POST["post_id"])) {
    $post_id = $_POST["post_id"];

    if(empty($_POST["post_id"])) {
        echo "名前が未入力です。";
    } else if(empty($_POST["content"])) {
        echo "コメントが未入力です。";
    }

    if(!empty($_POST["name"]) && !empty($_POST["content"])) {
        $name = $_POST["name"];
        $content = $_POST["content"];

        $pdo = db_connect();
        try {
            $sql = "INSERT INTO comments(post_id, name, content) values(:post_id, :name, :content)";
            $stmt = $pdo->prepare($sql);
            // $stmt->bindParam(":post_id", $post_id);
            // $stmt->bindParam(":name", $name);
            // $stmt->bindParam(":content", $content);
            $param_array = array(":post_id"=>$post_id, ":name"=>$name, ":content"=>$content);
            $stmt->execute($param_array);

            header("Location: detail_post.php?id=" . $post_id);
        } catch(PDOException $e) {
            echo "Error" . $e->getMessage();
            die();
        }
        
    }
} else {
    $post_id = $_GET["post_id"];
    // $post_idが空だった場合は不正な遷移なので、main.phpに戻す
    if(empty($post_id)) {
        header("Location: main.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head> 
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>コメント</h1> 
<form method="POST" action="">
<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
投稿者名:<br> 
<input type="text" name="name"> <br> 
コメント:<br>
<input type="text" name="content" style="width:200px;height:100px;"><br> 
<input type="submit" value="submit">
</form>
<a href="detail_post.php?id=<?php echo $post_id; ?>">記事詳細に戻る</a>
</body>
</html>