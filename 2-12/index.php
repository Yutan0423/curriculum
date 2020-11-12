<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        お名前：<input type="text" name="my_name"/><br>
        ご希望商品：
        <!-- 選択した方のvalueがname属性に代入されるようになっている -->
        <input type="radio" name="prize" value="A賞">A賞
        <input type="radio" name="prize" value="B賞">B賞
        <input type="radio" name="prize" value="C賞">C賞
        <br>
        個数：
        <select name="number">
            <?php for($i=1; $i<=10; $i++): ?>
                <option value="<?php echo $i ?>">
                    <?php echo $i ?>
                </option>
            <?php endfor ?>
        </select>
        <br>
        <input type="submit" value="申込" />
    </form>
</body>
</html>

<!-- 1. モジュール
「そいつ単独でも機能としては成立するけど、普通は他のものと組み合わせて使うよ！」な部品のこと
2. バージョン管理システム
ファイルの変更履歴を管理してくれるシステムのこと
3. サブクエリ
ショボい例だけど、例えば「SELECT * FROM (SELECT column1 FROM tbl1)」のように、SQL文の中に入れ子になってSQL文が書かれていること。
（）の部分
-->
