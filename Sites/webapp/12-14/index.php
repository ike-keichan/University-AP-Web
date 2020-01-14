<html>

<head>
   <meta charset="utf-8">
   <title>○○のブログサイト</title>
</head>

<body>
   <h1>○○のブログ</h1>

   <a href="./post.php"><button type="button">新規投稿</button></a>

   <hr />

   <?php
   try {
      //PDOクラスのオブジェクトの作成
      $dbh = new PDO('sqlite:blog.db', '', '');
      //prepareメソッドでSQL文の準備
      $sth = $dbh->prepare("select * from posts order by date desc");
      //準備したSQL文の実行
      $sth->execute();

      while ($row = $sth->fetch()) {
         //テーブルの内容を１行ずつ処理
         $time = preg_split("/[\s.:-]+/", $row['date']);
   ?>
         <h3><?php echo $row['title'] ?></h3>
         <p>
            <?php echo $row['contents'] ?><br>
            (<?php echo $time[0] . "年" . $time[1] . "月" . $time[2] . "日 " . $time[3] . ":" . $time[4] ?>)
         </p>
         <form action="delete.php" method="post">
            <p>
               <input type="submit" value="削除">
               <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </p>
         </form>
         <form action="edit.php" method="post">
            <p>
               <input type="submit" value="編集">
               <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </p>
         </form>
         <h3>コメント:</h3>
         <form action="comment.php" method="post">
            <p>
               <textarea name="contents" rows=“2" cols=“50"></textarea>
               <input type="hidden" name="pid" value="<?php echo $row['id'] ?>" />
               <input type="submit" value="投稿" />
            </p>
         </form>
         <hr />
   <?php
      }
   } catch (PDOException $e) {
      print "エラー!: " . $e->getMessage() . "<br/>";
      die();
   }
   ?>
</body>

</html>