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
    $hour = date("H");
    if ($hour < 10) {
        echo "おはようございます";
    } elseif ($hour < 17) {
        echo "こんにちは";
    } else {
        echo "こんばんは";
    }
    ?>
</body>

</html>