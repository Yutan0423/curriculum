<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$numbers = [80, 22, 20, 21];
$langs = ["PHP", "Python", "JAVA", "HTML"];
$commands = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$numbers_answer = $numbers[0];
$langs_answer = $langs[3];
$commands_answer = $commands[1];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２章チェックテスト</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/question.css">
</head>
<body class="bg-gray">
    <p class="greet">お疲れ様です<?php echo $name ?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">
        <h2 class="question-title">①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="answer-option">
            <?php foreach($numbers as $number): ?>
                <input type="radio" name="number" value="<?php echo $number ?>">
                <small><?php echo $number ?></small>
            <?php endforeach ?>
        </div>
        <h2 class="question-title">②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="answer-option">
            <?php foreach($langs as $lang): ?>
                <input type="radio" name="lang" value="<?php echo $lang ?>">
                <small><?php echo $lang ?></small>
            <?php endforeach ?>
        </div>
        <h2 class="question-title">③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="answer-option">
            <?php foreach($commands as $command): ?>
                <input type="radio" name="command" value="<?php echo $command ?>">
                <small><?php echo $command ?></small>
            <?php endforeach ?>
        </div>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="my_name" value="<?php echo $name ?>" />
        <input type="hidden" name="numbers_answer" value="<?php echo $numbers_answer ?>" />
        <input type="hidden" name="langs_answer" value="<?php echo $langs_answer ?>" />
        <input type="hidden" name="commands_answer" value="<?php echo $commands_answer ?>" />
        <p><input type="submit" value="回答する"></p>
    </form>
</body>
</html>


