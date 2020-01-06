<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>演習p07</title>
    </head>
        <?php
            function bmi ($height, $weight) 
            {
                $bmi = $weight / ($height * $height); 
                echo $bmi;
            } 
            $h=1.8;
            $w=70; 
        ?>
        <body> 
            <h1>演習p07</h1>
        <p>
            身長が<?php echo $h ?>mで
            体重が<?php echo $w ?>kgの人の， 
            BMIは<?php bmi ($h, $w) ?>です.
        </p> 
    </body>
</html>