<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    
    <p>
        <?php
        // クラス　Food
        class Food {
            private $name;
            private $price;
            // コンストラクタ
            public function __construct (string $name, int $price) {              
                $this->name = $name;
                $this->price = $price;
            }
            // priceプロパティを出力するメソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }
        // クラス Animal
        class Animal {
            private $name;
            private $height;
            private $weight;
            // コンストラクタ
            public function __construct (string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            // height プロパティを出力するメソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }
        // インスタンス作成
        $food = new Food('potato', 250);
        $animal = new Animal('dog', 60, 5000);
        // インスタンス出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        // メソッド実行
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>

</html>