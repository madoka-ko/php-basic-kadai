<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPの基礎編</title>
</head>

<body>
  <p>
    <?php
    // 連想配列を作る
    $onion_datas = ['名前'=>'玉ねぎ','値段'=> 200,'産地'=>'北海道'];
    // キーと値を1つずつ順番に出力する
    foreach ($onion_datas as $key => $value){
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>