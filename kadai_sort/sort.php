<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way ($array, $order) {
          if ($order == TRUE) {
            echo "昇順にソートします。<br>";
            sort($array);
          } else {
            echo "降順にソートします。<br>";
            rsort($array);
          }

          // 1行ずつ表示
          foreach ($array as $value) {
            echo $value . '<br>';
          }
        }

        // 昇順で呼び出す
        sort_2way($nums, TRUE);

        // 降順で呼び出す
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>