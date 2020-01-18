<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        <!--
        body {
            text-align: center;
        }

        .text-box {
            margin: 2em 30%;
            background: #dcefff;
        }

        .text-box .box-title {
            font-size: 1.2em;
            background: #5fb3f5;
            padding: 4px;
            text-align: center;
            color: #FFF;
            font-weight: bold;
            letter-spacing: 0.05em;
        }

        .text-box p {
            margin: 0;
            padding: 15px 20px;
        }
        -->
    </style>
    <title>ブログ記事のコメント</title>
</head>

<body>
    <?php
    if (isset($_POST["pid"]) && isset($_POST["contents"]) && isset($_POST["name"])) {
        try {

            //PDOクラスのオブジェクトの作成
            $dbh = new PDO('sqlite:blog.db', '', '');

            //タイムゾーンの指定
            ini_set("date.timezone", "Asia/Tokyo");

            //$timeへ成形した年月日および時刻データを格納
            $time = date("Y.m.d-H:i");

            //実行するSQL文を$sqlに格納
            $sql = 'insert into comments(pid, contents, date, name) values (?, ?, ?, ?)';

            //prepareメソッドでSQL文の準備
            $sth = $dbh->prepare($sql);

            //prepareした$sthを実行　SQL文の？部に格納する変数を指定
            $sth->execute(array($_POST["pid"], $_POST["contents"], $time, $_POST["name"]));

            $dbh = null;
        } catch (PDOException $e) {
            print "エラー!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    ?>
    <div class="text-box">
        <p>あなたのコメントはきっと投稿されただろう！！</p>
        <p><a href="index.php">blog閲覧ページはこちら</a></p>
    </div>
</body>

</html>