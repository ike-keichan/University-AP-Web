<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>レポート08</title>
    </head>
    <body>
        <?php
            function fibonacci($aNumber) {
                if ($aNumber == 0|| $aNumber == 1) {
                    return $aNumber;
                } else {
                    return fibonacci($aNumber - 1) + fibonacci($aNumber - 2); 
                }
            }
            function loop(){
                for ($index = 0; $index <= 20; $index++){
                    print($index."：".fibonacci($index)."<br>");
                }
            }
        ?>
        <h1>フィボナッチ数列</h1>
        <p>
            <?php loop(); ?>
        </p>
    </body>
</html>


