<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <p>昇順にソートします。</P>
        <?php
        $nums=[15,4,18,23,10];
        sort($nums);
        foreach($nums as $num){
          echo "$num<br>";
        }
        ?>
    </p>
    <p>
    <p>降順にソートします。</P>
        <?php
        $nums=[15,4,18,23,10];
        rsort($nums);
        foreach($nums as $num){
          echo "$num<br>";
        }
        ?>
    </p>
</body>

</html>
