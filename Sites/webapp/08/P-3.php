<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームからのデータの受取</title>
</head>

<body>
    <?php
    echo "<h1>" . @$_POST["string"] . "</h1>";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <p>
            <input type="text" name="string" />
            <input type="submit" value="送信" /> </p>
    </form>
</body>

</html>