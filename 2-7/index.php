<?php

$colors = [
    "red" => "赤",
    "blue" => "青",
    "green" => "緑"
];

var_dump($colors);

$colors["yellow"] = "黄色";

var_dump($colors);


// プルリクエスト（マージリクエスト）
// プルリクエストとは、コードの変更をレビュワーに通知し、マージを依頼する機能のこと。
// コードのレビューを受けることで、1人で作ると気がつかないコードの指摘やバグや記述ミスの発見ができ、コードの品質を高める。

// Git Flow
// gitの拡張プラグインのこと。
// A successful Git branching model」を基にしたワークフロー。

// CRON
// UNIX系のOS（MacとかLinuxとか）に入っているプログラムのひとつ
// 指示した時間に指定したプログラムを動かしてくれるやつ