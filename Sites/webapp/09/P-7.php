<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>演習p07</title>
</head>
<?php
function bmi($height, $weight)
{
    $bmi = $weight / ($height * $height);
    echo $bmi;
}
$input_height = 1.8;
$input_weight = 70;
?>

<body>
    <h1>演習p07</h1>
    <p>
        身長が<?php echo $input_height ?>mで
        体重が<?php echo $input_weight ?>kgの人の，
        BMIは<?php bmi($input_height, $input_weight) ?>です.
    </p>
</body>

</html>