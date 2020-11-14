<?php
$sum = 0;

for($i=1; $sum<=40; $i++) {
    $land_num = mt_rand(1, 6);
    echo $i . "回目=" . $land_num . "<br>";
    $sum += $land_num;
    if($sum >=40) {
        echo "合計" . $i . "回でゴールしました";
        break;
    }
}

echo "<br>" . "<br>";
date_default_timezone_set('Asia/Tokyo');
$hour = date('H');

if($hour >= 5 && $hour <= 11) {
    echo "今" . $hour . "時台です" . "<br>";
    echo "おはようございます";
} elseif($hour > 11 && $hour <= 18) {
    echo "今" . $hour . "時台です" . "<br>";
    echo "こんにちは";
} else {
    echo "今" . $hour . "時台です" . "<br>";
    echo "こんばんは";
}


