<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザ定義関数</title>
</head>

<body>
    <?php
    function fnction1()
    {
        ini_set("date.timezone", "Asia/Tokyo");
        echo "今日は" . date("Y年m月d日") . "です。";
    }
    echo "現在" . date("H時i分s秒") . "です。";
    ?>
    <h1>演習p06</h1>
    <p>
        <?php fnction1() ?>
    </p>
</body>

</html>