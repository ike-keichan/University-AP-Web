<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPによるアクセスカウンタ</title>
</head>

<body>
    <?php
    $datafile = "cnt.dat";
    $length = 10;
    $file = fopen($datafile, "r+");
    $count = fgets($file, $length);
    $count = $count + 1;
    rewind($file);
    flock($file, LOCK_EX);
    fputs($file, $count, $length);
    flock($file, LOCK_UN);
    fclose($file);
    echo $count;
    ?>
</body>

</html>