<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ブログ記事のコメント</title>
</head>

<body>
    <h1>コメント投稿</h1>
    <?php
    try {
        if (isset($_POST["title"]) && isset($_POST["contents"])) {
            try {
                //PDOクラスのオブジェクトの作成
                $dbh = new PDO('sqlite:blog.db', '', '');
                //タイムゾーンの指定
                ini_set("date.timezone", "Asia/Tokyo");
                //$timeへ成形した年月日および時刻データを格納
                $time = date("Y.m.d-H:i");
                //実行するSQL文を$sqlに格納
                $sql = 'insert into comments (pid, contents, date) values (?, ?, ?)';
                //prepareメソッドでSQL文の準備
                $sth = $dbh->prepare($sql);
                //prepareした$sthを実行　SQL文の？部に格納する変数を指定
                $sth->execute(array($_POST["pid"], $_POST["contents"], $time));

                if ($sth) {
                    echo "コメント１件を投稿しました";
                } else {
                    echo "コメント１件の投稿に失敗しました";
                }
            } catch (PDOException $e) {
                print "エラー!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        $dbh = null;
    } catch (PDOException $e) {
        print "エラー!: " . $e->getMessage() . "<br/>";
        die();
    }
    ?>
    <p><a href="index.php">blog閲覧ページはこちら</a></p>
</body>

</html>