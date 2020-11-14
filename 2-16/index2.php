<?php

$test_file = "test2.txt";

if(is_readable($test_file)) {
    echo "readable!" . "<br>";
    $fp = fopen($test_file, "r");
    while($line = fgets($fp)) {
        // 開いたファイルから1行ずつ読み込む
        echo $line . "<br>";
    }

    fclose($fp);
} else {
    echo "not readable!";
    exit;
}

// fopen
// fwrite
// fgets
// fclose