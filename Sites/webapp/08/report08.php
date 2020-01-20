<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>レポート08</title>
</head>

<body>
    <?php
    function fibonacci($a_number)
    {
        if ($a_number == 0 || $a_number == 1) {
            return $a_number;
        } else {
            return fibonacci($a_number - 1) + fibonacci($a_number - 2);
        }
    }
    function loop()
    {
        for ($index = 0; $index <= 20; $index++) {
            print($index . "：" . fibonacci($index) . "<br>");
        }
    }
    ?>
    <h1>フィボナッチ数列</h1>
    <p>
        <?php loop(); ?>
    </p>
</body>

</html>