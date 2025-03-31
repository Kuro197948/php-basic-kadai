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

           public function __construct($name,$price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price() {
            echo $this->price . '<br>';
        }
    }
   
    // インスタン化する
    $potato = new Food('potato', 250);

    // インスタンス$userの各プロパティの値を出力する
    print_r($potato);
    echo '<br>';
    


    class Animal{
        private $name;
        private $height;
        private $weight;
        
        public function __construct($name,$height,$weight) {
            $this-> name = $name;
            $this-> height = $height;
            $this-> weight = $weight;
            
        }
        public function show_height() {
            echo $this->height . '<br>';
        }
    }
     // インスタンス化する
     $dog = new Animal('dog',60,5000);

     // インスタンス$userの各プロパティの値を出力する
     print_r($dog);
     echo '<br>';

     $potato->show_price();
     $dog->show_height();

   

     //メソッドにアクセスした実行
     
    ?>
</p>
    
    </p>
</body>

</html>