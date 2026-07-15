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
    class Food{
    // プロパティを定義する
    private $name;
    private $price;
    // メソッドの定義
      public function show_price(){
      echo $this->price .'<br>';
    }
    // コンストラクタを定義する
    public function __construct($name,$price){
      $this->name = $name;
      $this->price = $price;
    }
    }
     // クラスを定義する
    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      // メソッドの定義
      public function show_height(){
        echo $this-> height . '<br>';
      }
      // コンストラクタを定義する
      public function __construct($name,$height,$weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

    }
    // インスタンス化し引数を渡す
    $food = new Food ('potato',250);
    print_r($food);
    echo '<br>';
    
    $animal = new Animal('dog',60,5000);
    print_r($animal);
    echo '<br>';

    // メソッドにアクセスして実行
    $food->show_price();

    $animal->show_height();
    ?>
  </p>
</body>
</html>