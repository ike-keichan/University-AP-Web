<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPによる時刻表示</title>
</head>

<body>
    <h1>PHPによる時刻表示</h1>
    <h2>PHPのプログラム</h2>
    <?php
    ini_set("date.timezone", "Asia/Tokyo");
    echo "今日は" . date("Y年m月d日") . "です。";
    echo "現在" . date("H時i分s秒") . "です。";
    ?>
</body>

</html>