<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>ユーザ定義関数</title>
    </head>
    <body>
        <?php
            function average($aNumber, $anotherNumber) {
                $result = ($aNumber + $anotherNumber) / 2;
                echo $aNumber."と".$anotherNumber."の平均は".$result." です.";
            }
        ?>
        <p>
            <?php average(12,25); ?>
        </p>
    </body>
</html>