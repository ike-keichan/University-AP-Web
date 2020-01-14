<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style type="text/css">
  <!--
  body {
      text-align:center;
  }
  .post-box-textbox {
      margin: 2em 30%;
      background: #f1f1f1;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.22);
  }
  .post-box-textbox .box-title {
      font-size: 1.2em;
      background: #5fc2f5;
      padding: 4px;
      color: #FFF;
      font-weight: bold;
      letter-spacing: 0.05em;
  }
  .post-box-textbox p {
      padding: 15px 20px;
      margin: 0;
  }
  .text-box{
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
  .button-blue {
      display: inline-block;
      padding: 7px 20px;
      border-radius: 25px;
      text-decoration: none;
      color: #FFF;
      background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
      transition: .4s;
  }
  .button-blue:hover {
      background-image: linear-gradient(#6795fd 0%, #6666FF 100%);
  }
  -->
  </style>
  <title>ブログ記事の編集</title>
</head>

<body>
  <div class="text-box">
    <?php
    try {

      //PDOクラスのオブジェクトの作成
      $dbh = new PDO('sqlite:blog.db', '', '');

      if (isset($_POST["id"]) && !isset($_POST["title"]) && !isset($_POST["contents"])) {

        //実行するSQL文を$sqlに格納
        //index.phpから転送されたidを元に対象記事を抽出する
        $sql = 'select * from posts where id = ?';

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
          //タイムゾーンの指定
          ini_set("date.timezone", "Asia/Tokyo");

          //$timeへ成形した年月日および時刻データを格納
          $time = date("Y.m.d-H:i");
          
          //実行するSQL文を$sqlに格納
          $sql = 'update posts set title=?, contents=?, updateDate=? where id=?';

          //prepareメソッドでSQL文の準備
          $sth = $dbh->prepare($sql);

          //prepareした$sthを実行　SQL文の？部に格納する変数を指定
          $sth->execute(array($_POST["title"], $_POST["contents"], $time, $_POST["id"]));

          if ($sth) {
            echo "記事１件を更新しました";
          } else {
            echo "記事１件の更新に失敗しました";
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
  </div>
  <div class="post-box-textbox">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <p class="box-title"><input type="text" name="title" value="<?php echo $_POST["title"] ?>" size="60" /></p>
      <p><textarea name="contents" placeholder="コメント"　rows="10" cols="60"><?php echo $_POST["contents"] ?></textarea></p>
      <p>パスワード<br><input type="password" name="password" size="20" /></p>
      <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>" />
      <input type="reset" value="リセット" class="button-blue" />
      <input type="submit" value="更新" class="button-blue" />
    </form>
    <br>
  </div>
</body>

</html>