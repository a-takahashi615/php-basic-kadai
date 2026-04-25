<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>生徒のテストの平均点</title>
</head>
<body>
  <?php
  // 生徒10人分の点数を入れる変数を作成（値の代入も行う）
  $score1 = 80;
  $score2 = 60;
  $score3 = 55;
  $score4 = 40;
  $score5 = 100;
  $score6 = 25;
  $score7 = 80;
  $score8 = 95;
  $score9 = 30;
  $score10 = 60;

  // 合計点を算出し、変数に代入
  $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

  // 平均点を算出し、変数に代入
  $average = $total / 10;

  // 平均点を出力
  echo $average;
  ?>
  
</body>
</html>