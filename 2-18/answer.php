<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$number = $_POST["number"];
$lang = $_POST["lang"];
$command = $_POST["command"];
$name = $_POST["my_name"];

$numbers_answer = $_POST["numbers_answer"];
$langs_answer = $_POST["langs_answer"];
$commands_answer = $_POST["commands_answer"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function responseAnswer($answer,$test) {
    // 関数の中はグローバル変数でも引数で持ってくる必要がある。
    if($answer === $test || $answer === $test || $answer === $test) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>２章チェックテスト</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/answer.css">
</head>
<body class="bg-gray">
    <p class="item"><?php echo $name ?>さんの結果は・・・？</p>
    <p class="item">①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="item"><?php responseAnswer($number,$numbers_answer); ?></p>

    <p class="item">②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="item"><?php responseAnswer($lang, $langs_answer); ?></p>

    <p class="item">③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p class="item"><?php responseAnswer($command, $commands_answer); ?></p>
</body>
</html>
