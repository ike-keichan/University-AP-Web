<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>フォームからのデータの受取</title>
    </head> 
    <body>
    <?php
        echo "<h1 style=color:".$_POST["color"].">".$_POST["string"]. "</h1>";
    ?>
    <a href="P-12s.php">入力ページへ</a>
    </body>
</html>