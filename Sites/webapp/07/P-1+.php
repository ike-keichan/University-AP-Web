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
    $week = array("日", "月", "火", "水", "木", "金", "土");
    echo "今日は" . date("Y年m月d日") . $week[date("w")] . "曜日です。<br>";
    ?>
</body>

</html>