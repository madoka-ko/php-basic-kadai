<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <P>
    <?php
    // ソート関数を作成（引数$array,$order）
    function sort_2way ($array,$order){
      // $orderがTRUEなら昇順に並べかえる
    if($order === true){
    echo '昇順にソートします<br>';
    sort($array);
    }else{
      // それ以外なら降順に並べ替える
      echo '降順にソートします<br>';
      rsort($array);
    }
    // ソートした配列の値を一つずつ取り出す
    foreach ($array as $value){
      echo $value .'<br>';
    }
    }
    // ソートする配列を宣言
    $nums = [15,4,18,23,10];
    // 昇順のソート関数を呼び出す
    sort_2way($nums,true);
    // 降順のソート関数を呼び出す
    sort_2way($nums,false);
 
    ?>
  </p>
</body>
</html>