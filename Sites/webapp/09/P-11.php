<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームからのデータの受取</title>
</head>

<body>
    <?php
    echo "<h1 style=color:" . $_POST["color"] . ">" . $_POST["string"] . "</h1>";
    ?>
</body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <p>
        <input type="text" name="string" />
        <select name="color">
            <option value="black" selected> 黒 </option>
            <option value="red"> 赤 </option>
            <option value="blue"> 青 </option>
        </select>
        <input type="submit" value="送信" />
    </p>
</form>

</html>