<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームからのデータの受取</title>
</head>

<body>
    <?php
    if (isset($_POST["string"])) {
        if (strcmp($_POST["color"], "black") == 0) {
            echo "<h1 style='font-style: italic'>" . $_POST["string"] . "</h1>";
        } else if (strcmp($_POST["color"], "red") == 0) {
            echo "<h1 style='color:red; text-decoration:line-through'>" . $_POST["string"] . "</h1>";
        } else if (strcmp($_POST["color"], "blue") == 0) {
            echo "<h1 style='background-color:" . $_POST["color"] . "'>" . $_POST["string"] . "</h1>";
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <input type="text" name="string" />
            <input type="radio" name="color" value="black" checked="checked" />黒
            <input type="radio" name="color" value="red" />赤
            <input type="radio" name="color" value="blue" />青
            <input type="submit" value="送信" />
        </p>
    </form>
</body>

</html>