<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
           // プロパティを定義する
           private $name;
           private $price;


           public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
    }

    // インスタンス化する
    $food = new Food('potate', 250);

    // インスタンス$userの各プロパティの値を出力する
    print_r($food);
    echo '<br>';

    class Animal{
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this-> name = $name;
            $this-> height = $height;
            $this-> weight = $weight;
            
        }

    }
     // インスタンス化する
     $animal = new Animal('dog', 60,5000);

     // インスタンス$userの各プロパティの値を出力する
     print_r($animal);
     
    ?>
</p>
    
    </p>
</body>

</html>