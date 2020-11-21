<?php

class Enemy {
    private $name;
    public $stamina;
    public $attack;
    public static $count = 0;

    public function __construct($name, $stamina=5, $attack=1) {
        $this->name = $name;
        $this->stamina = $stamina;
        $this->attack = $attack;
        Self::$count += 1;
    }

    public static function getEnemyCount() {
        echo Self::$count . "体の敵を作りました！";
    }

    public function sayMyName() {
        echo $this->name . "があらわれた" . "<br>";
    }

    public function sayStatus() {
        echo "名前：" . $this->name . "<br>";
        echo "体力：" . $this->stamina . "<br>";
        echo "攻撃力：" . $this->attack . "<br>";
    }

    public function powerUp() {
        $this->attack += 10;
        echo "攻撃力が" . $this->attack . "になった。<br>";
    }
}

class Boss extends Enemy {

    public function getMyName($name) {
        
    }

    // 継承元のクラスのメソッドを上書き（オーバーライド）する
    public function sayMyName() {
        echo "ボスの" . $this->name . "があらわれた！<br>";
    }

    public function specialAttack() {
        echo $this->name . "のすごい強い一撃！<br>";
    }
}

//Enemyクラスからスライムを作る
$slime = new Enemy("スライム", 5, 1);
$slime->sayMyName();
$slime->sayStatus();
$slime->powerUp();

echo "強くなりスギィ！！！<br>";
echo "<br>";

$boss = new Boss("竜王", 5000, 150);
$boss->sayMyName();
$boss->sayStatus();
$boss->specialAttack();

// Enemy::getEnemyCount();
// $slime_A = new Enemy("スライム");
// $slime_A->sayStatus();
// $slime_B = new Enemy("スライム");
// $slime_C = new Enemy("スライム");
// $slime_D = new Enemy("スライム");
// Enemy::getEnemyCount();