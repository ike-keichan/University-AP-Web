<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>レポート09</title>
    </head>
    <body> 
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 
            <p>
                円の面積を算出します。
                半径:<input type="text" name="radius" /><br> 
                <input type="submit" value="送信" />
            </p> 
        </form> 
        <?php
            function calculation($radius) 
            {
                $circleArea = $radius * $radius * M_PI; 
                return $circleArea;
            }
            if (isset($_POST["radius"]))
            {
                $radius = mb_convert_kana($_POST["radius"],"n","utf-8"); 
                
                    $result = calculation($radius);
                    echo "半径が". $_POST["radius"]."の円の，";
                    echo "<h1>面積 は $result です</h1> ";
                
            }
        ?>
    </body>
</html>