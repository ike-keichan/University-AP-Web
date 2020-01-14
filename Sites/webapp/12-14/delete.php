<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ブログ記事の削除</title>
</head>

<body>
  <h1>ブログ記事の削除</h1>
  <?php
  try {

    //PDOクラスのオブジェクトの作成
    $dbh = new PDO('sqlite:blog.db', '', '');

    if (isset($_POST["id"]) && !isset($_POST["title"]) && !isset($_POST["contents"])) {

      //実行するSQL文を$sqlに格納
      //index.phpから転送されたidを元に対象記事を抽出する
      $sql = 'select * from posts where id=?';

      //prepareメソッドでSQL文の準備
      $sth = $dbh->prepare($sql);

      //prepareした$sthを実行　SQL文の？部に格納する変数を指定
      $sth->execute(array($_POST["id"]));

      if ($row = $sth->fetch()) {
        $_POST["title"] = $row['title'];
        $_POST["contents"] = $row['contents'];
      }
    } elseif (isset($_POST["id"]) && isset($_POST["title"]) && isset($_POST["contents"])) {
      if (!isset($_POST["password"]) || $_POST["password"] != "aaaaa") {
        echo '<p>パスワードが違います</p>';
      } else {
        //実行するSQL文を$sqlに格納
        $sql = 'delete from posts where id=?';

        //prepareメソッドでSQL文の準備
        $sth = $dbh->prepare($sql);

        //prepareした$sthを実行　SQL文の？部に格納する変数を指定
        $sth->execute(array($_POST["id"]));

        if ($sth) {
          echo "記事１件を削除しました";
        } else {
          echo "記事１件の削除に失敗しました";
        }
      }
    }

    $dbh = null;
  } catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
  }

  ?>

  <p><a href="index.php">blog閲覧ページはこちら</a></p>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <dl>
      <dt>表題：</dt>
      <dd><?php echo $_POST["title"] ?></dd>
      <dt>本文：</dt>
      <dd><?php echo $_POST["contents"] ?></dd>
      <dt>パスワード：</dt>
      <dd><input type="password" name="password" size="20" /></dd>
    </dl>
    <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>" />
    <input type="reset" value="リセット" />
    <input type="submit" value="削除" />
  </form>
</body>

</html>