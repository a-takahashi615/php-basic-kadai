<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>
<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food {

      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義
      public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
      }

      // priceのプロパティの値を出力するメソッド
      public function show_price() {
        echo $this->price . '<br>';
      }
    }

    // Animalクラスを定義する
    class Animal {

      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      }

      // heightプロパティの値を出力するメソッド
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // インスタンスの各プロパティの値を出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッドを出力する
    $food->show_price();
    $animal->show_height();
    ?> 
  </p>
</body>
</html>