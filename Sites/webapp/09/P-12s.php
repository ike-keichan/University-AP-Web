<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームからのデータの受取</title>
</head>

<body>
    <form action="P-12r.php" method="post">
        <p>
            <input type="text" name="string" />
            <select name="color">
                <option value="black"> 黒 </option>
                <option value="red"> 赤 </option>
                <option value="blue"> 青 </option>
            </select>
            <input type="submit" value="送信" />
        </p>
    </form>
</body>

</html>