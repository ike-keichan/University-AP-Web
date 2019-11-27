<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>ユーザ定義関数</title>
    </head>
    <body>
        <?php
            function average($num1, $num2) {
                $result = ($num1 + $num2) / 2;
                echo $num1."と".$num2."の平均は".$result." です.";
            }
        ?>
        <p>
            <?php average(12,25); ?>
        </p>
    </body>
</html>