<?php

$testFile = "test.txt";
$contents = "こんにちは";

if(is_writable($testFile)) {
    // fpoen関数の"w"は上書き
    $fp = fopen($testFile, "w");
    fwrite($fp, $contents);
    fclose($fp);
    echo "finish writing!" . "<br>";
} else {
    echo "not writable!" . "<br>";
    exit;
}


// 1. CakePHPの2系・3系の違い
// もっとも大きな変更点の1つとしては「連想配列地獄がオブジェクトのメソッドチェインに変わる」というところでしょうか。
// CakePHPが持つアイデンティティが良い意味で失われた感じです。
// 2. LAMP
// Linux ＋ Apache ＋ MySQL（MariaDB） ＋ PHP（Perl、Python）で構成される環境のこと
// 3. AWS
// Amazon Web Serviceの略
// Amazonさんが運営している、サーバやデータベースなど、インターネットを経由して使えるあれやこれやを貸してくれるサービスのこと

