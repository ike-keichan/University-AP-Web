<?php
    if (isset($_COOKIE["visit"]))
    {
        $count = $_COOKIE["visit"] + 1; 
    }else
    {
        $count = 1;
    }
    setcookie("visit", $count, time()+30);
?>
<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>クッキーの利用</title>
    </head>
    <body>
        <?php
            print('<p>あなたの訪問回数は'.$count.'回目ですね</p>');
        ?>
    </body> 
</html>