<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザ定義関数</title>
</head>

<body>
    <?php
    function average($a_number, $another_number)
    {
        $result = ($a_number + $another_number) / 2;
        echo $a_number . "と" . $another_number . "の平均は" . $result . " です.";
    }
    ?>
    <p>
        <?php average(12, 25); ?>
    </p>
</body>

</html>