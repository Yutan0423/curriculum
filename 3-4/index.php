<?php
require_once("getData.php");
$x = new getData();
$user_data = $x->getUserData();
$post_data = $x->getPostData();
// var_dump($user_data);
// var_dump($post_data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header class="clearfix">
            <div class="header-left">
                <img src="image/1599315827_logo.png" alt="Y&Iのロゴ">
            </div>
            <div class="header-right">
                <div class="header-right__top">
                    <p>ようこそ <?php echo $user_data["first_name"] . $user_data["last_name"] ?>さん</p>
                </div>
                <div class="header-right__bottom">
                    <p>最終ログイン：<?php echo $user_data["last_login"] ?></p>
                </div>
            </div>
        </header>
        <div class="main-content">
            <table>
                <tr class="column">
                    <td>記事ID</td>
                    <td>タイトル</td>
                    <td>カテゴリ</td>
                    <td>本文</td>
                    <td>登校日</td>
                </tr>
                <?php while($row = $post_data->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr class="record">
                        <td>
                            <?php echo $row["id"] ?>
                        </td>
                        <td>
                            <?php echo $row["title"] ?>
                        </td>
                        <td>
                            <?php if($row["category_no"] === "1" ): ?>
                                <?php echo "食事" ?>
                            <?php elseif($row["category_no"] === "2"): ?>
                                <?php echo "旅行" ?>
                            <?php else: ?>
                                <?php echo "その他" ?>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php echo $row["comment"] ?>
                        </td>
                        <td>
                            <?php echo $row["created"] ?>
                        </td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
        <footer>
            <small>Y&I group.inc</small>
        </footer>
    </div>
</body>
</html>