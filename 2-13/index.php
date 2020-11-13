<?php

$x = 9.4;
echo ceil($x);
echo "<br>";

$y = 3.9;
echo floor($y);
echo "<br>";

$z = 4.5;
echo round($z);
echo "<br>";

echo mt_rand(1, 300);
echo "<br>";

$str = "hogehoge";
echo strlen($str);
echo "<br>";

$str = "nakajima";
echo strpos($str, i);
echo "<br>";

echo substr($str, -4, 4);
echo "<br>";

echo str_replace("naka", "NAKA", $str);
echo "<br>";

$str = "I am Yuta";
echo $str;
echo "<br>";
echo str_replace(" ", "", $str);
echo "<br>";

$str = "おやすみなさい";
echo mb_strlen($str);
echo "<br>";

$name = "丹さん";
$limit_number = 30;
printf("%sの残り時間は%d分です", $name, $limit_number);
echo "<br>";

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}

circleArea(3);
echo "<br>";

$name = "丹さん";
$limit_time = 40;
$price = 500;
printf("%sはあと%d分で%d円の罰金です。", $name, $limit_time, $price);
echo "<br>";

$limit_hour = 2;
$limit_minute = 5;
printf("残り%02d時間%02d分(printfの場合)", $limit_hour, $limit_minute);
echo "<br>";

$limit_time = sprintf("残り%02d時間%02d分(sprintfの場合)", $limit_hour, $limit_minute);
echo $limit_time;


// 1. PostgreSQL・Oracle SQL
// PostgreSQL（ポストグレスキューエル）はオープンソースのリレーショナルデータベース管理システム（RDBMS）。
// Oracle SQLは米Oracleが開発したSQL
// 2. TortoiseGit・TortoiseSVN
// TortoiseGitは分散型バージョン管理システムである Git のクライアントで、TortoiseSVNをもとに、 Microsoft Windows シェル拡張 として実装されている。
// TortoiseSVN は、バージョン管理システムであるSubversionのクライアントフロントエンド。
// 3. 外部設計・内部設計
// 外部設計：お客さまの「こんなものが欲しいんだよね～」を受けて「それじゃあ、こんなシステムを作りましょう」な全体像や概要をざっくりと考える工程のこと
// 内部設計：基本設計でざっくり考えた概要をもとにして、実際のプログラムが作れるまで細かく落とし込む工程のこと