<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>２章チェックテスト</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray">
    <h1 class="site-title">2章チェックテスト</h1>
    <hr>
    <!--名前を入力してquestion.phpに移動するフォームを作成-->
    <div class="main-content">
        <form action="question.php" method="post">
            <input type="text" name="my_name" placeholder="名前を入力してください">
            <input type="submit" value="テスト開始">
        </form>
    </div>
</body>
</html>