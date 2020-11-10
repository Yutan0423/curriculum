<?php

$name = "";
$password = "";

if ($name === "taro" && $password ==="pass") {
    echo "ログイン成功です";
} elseif($name === "taro" ) {
    echo "パスワードが間違っています";
} elseif($password === "pass") {
    echo "名前が間違っています";
} else {
    echo "入力情報が間違っています";
}