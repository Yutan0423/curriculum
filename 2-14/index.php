<?php

$fruits = ["banana", "grape", "peach", "lemon"];
echo count($fruits);
echo "<br>";
$fruits[] = "pine";
echo count($fruits);
echo "<br>";

// sortは返却値が論理値（true / false）
sort($fruits);
var_dump($fruits);
echo "<br>";

$numbers = [21, 45, 73, 82, 12];
sort($numbers);
var_dump($numbers);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
echo "<br>";

if(in_array("sasaki")) {
    echo "佐々木さんがいるよ";
    echo "<br>";
} else {
    echo "佐々木さんはいないよ";
    echo "<br>";
}

$atstr =implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";


$str = "2,4,6,8,10,12,14";
$array = explode(",", $str);
var_dump($array);


// 1. 要件定義(要求仕様書)
// お客さまの「こんなものが欲しいんだよね～」をまとめる工程のこと
// 2. 単体テスト・結合テスト
// 単体テスト：「合体前の部品は、それぞれちゃんと動く？」を確認するテストのこと
// 結合テスト：「合体して、ちゃんと動く？」を確認するテストのこと
// 3. テスト仕様書(どのようなもの、項目)
// どんな条件の元でどんなテストをするか洗い出してまとめたもの……をファイルとか紙にした資料のこと