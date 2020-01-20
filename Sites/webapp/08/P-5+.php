<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHPによるアクセスカウンタ</title>
</head>

<body>
    <?php
    ini_set("date.timezone", "Asia/Tokyo");
    $data = "access : " . date("Y/m/d H:i:s") . "\n";
    $fp = fopen('sample.txt', 'a+');
    flock($fp, LOCK_EX);
    if (fwrite($fp, $data) === FALSE) {
        print('ファイル書き込みに失敗しました<br>');
    } else {
        print('「 ' . $data . '」をファイルに書き込みました<br>');
    }
    flock($fp, LOCK_UN);
    fclose($fp);
    ?>
</body>

</html>