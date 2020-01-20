<?php
if (isset($_COOKIE["visit"])) {
    $count = $_COOKIE["visit"] + 1;
} else {
    $count = 1;
}
setcookie("visit", $count, time() + 60 * 60);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>クッキーの利用</title>
</head>

<body>
    <?php
    if ($count > 1) {
        print('<p>またの訪問をありがとうございます.あなたの訪問回数は' . $count . '回目ですね</p>');
    } else {
        print('<p>初めまして! あなたの訪問回数は' . $count . '回目ですね</p>');
    }
    ?>
</body>

</html>