<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>演習p10</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            身長(cm):<input type="text" name="height" /><br>
            体重(kg):<input type="text" name="weight" /><br>
            <input type="submit" value="送信" />
        </p>
    </form>
    <?php
    function bmi2($height, $weight)
    {
        $bmi = $weight / ($height * $height);
        return $bmi;
    }
    if (isset($_POST["height"])) {
        $height = mb_convert_kana($_POST["height"], "n", "utf-8");
        $weight = mb_convert_kana($_POST["weight"], "n", "utf-8");
        if ($height == 0) {
            echo "身長にゼロが入力されています";
        } else {
            $result = round(bmi2($_POST["height"] / 100, $_POST["weight"]), 2);
            echo "身長が" . $_POST["height"] . "cmで体重が" . $_POST["weight"] . "kgの人の，";
            echo "<h1>BMI は $result です</h1> ";
        }
    }
    ?>
</body>

</html>