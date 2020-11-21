<?php

function devide($int, $int2) {
    try{
        if($int2 === 0) {
            throw new Exception("0で割ることはできません");
        }
        return $int / $int2;
    } catch(Exception $e) {
        echo "例外処理が発生しました";
        echo "<br>";
        echo $e->getMessage();
    }
}

echo devide(5,0);