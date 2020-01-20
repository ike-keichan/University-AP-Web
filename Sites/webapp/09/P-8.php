<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>演習p08</title>
</head>
<?php
function bmi2($height, $weight)
{
    $bmi = $weight / ($height * $height);
    return $bmi;
}
$input_height = 1.8;
$input_weight = 70;
?>

<body>
    <h1>演習p08</h1>
    <p>
        身長が<?php echo $input_height ?>mで
        体重が<?php echo $input_weight ?>kgの人の，
        BMIは<?php echo bmi2($input_height, $input_weight) ?>です.
    </p>
</body>

</html>