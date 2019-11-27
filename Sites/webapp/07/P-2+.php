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
            $second = date("s"); 
            $left = 60 - $second; 
            if($second < 50) {
                echo date("i")."分から".$second."秒経ちました"; 
            } else {
                echo "残り".$left."秒で".(date("i") + 1)."分です"; 
            }
        ?>
    </body>
</html>

<!--
    授業資料では「$second = date("s");」の様にdate関数の引数をクォートなしで使用していたが警告が出る。
    date関数の引数はstring型のため文字列として引数宣言しないといけない。
    参考URL：https://www.php.net/manual/ja/function.date.php
-->

