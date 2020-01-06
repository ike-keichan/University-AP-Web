<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>長さの単位変換</title>
    </head> 
    <body>
        <?php
            function change_unit ($unit1, $unit2, $value) {
            if ($unit1 == "feet") 
            {
                $meter = $value * 0.3048;
            } elseif ($unit1 == "inch") 
            {
                $meter = $value * 0.3048 / 12;
            } elseif ($unit1 == "cm") 
            {
            $meter = $value / 100;
            } elseif ($unit1 == "meter") 
            { 
                $meter = $value;
            } elseif ($unit1 == "yard") 
            {
                $meter = $value * 0.9144;
            } elseif ($unit1 == "mile") 
            {
                $meter = $value * 1609;
            }
            
            if ($unit2 == "feet") 
            {
                $result = $meter / 0.3048;
            } elseif ($unit2 == "inch") 
            {
                $result = $meter / 0.3048 * 12;
            } elseif ($unit2 == "cm") 
            {
                $result = $meter * 100;
            } elseif ($unit2 == "meter") 
            { 
                $result = $meter;
            } elseif ($unit2 == "yard") 
            {
                $result = $meter / 0.9144;
            } elseif ($unit2 == "mile") 
            {
                $result = $meter / 1609;
            } 
            return $result;
        }
        $answer = round(change_unit (@$_POST["unit1"], @$_POST["unit2"], @$_POST["value"]),2);
        echo "<h1>".@$_POST["value"]." ".@$_POST["unit1"]." は ".$answer." ".@$_POST["unit2"]." です.</h1>";
        ?>
        <br>
        <a href="p13s.php">長さの単位変換 入力ページへ</a>
    </body>
</html>