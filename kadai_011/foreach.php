<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>foreach文を使った連想配列</title>
</head>

<body>
  <p>
    <?php
    $basic_informations=['名前'=>'玉ねぎ','値段'=>200,'産地'=>'北海道'];
    //連想配列$basic_informationsのキーと値を1つずつ順番に出力する
    foreach($basic_informations as $key =>$value){
      echo "{$key}:{$value}<br>";
    }
    ?>
    </p>
  </body>
  </html>