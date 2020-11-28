<?php

// $_SESSION["user_name"]が空だった場合、ログインページにリダイレクトする
function check_user_logged_in() {
    session_start();
    // セッションにuser_nameの値がなければlogin.phpにリダイレクト
    if(empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}