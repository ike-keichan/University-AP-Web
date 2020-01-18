<html>

<head>
   <meta charset="utf-8">
   <style type="text/css">
      <!--
      .title {
         ont-size: 1.2em;
         background: #5fc2f5;
         padding: 4px;
         color: #FFF;
         font-weight: bold;
         letter-spacing: 0.05em;
      }

      .report-textbox {
         margin: 2em 0;
         background: #f1f1f1;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.22);
      }

      .report_table {
         width: auto;
         border-collapse: collapse;
         border-spacing: 0;
      }

      .post-box {
         padding: 0.2em 0.5em;
         margin: 2em 0;
         background: #d6ebff;
         box-shadow: 0px 0px 0px 10px #d6ebff;
         border: dashed 2px white;
      }

      .post-box p {
         margin: 0;
         padding: 0;
      }

      .post-box-textbox {
         margin: 2em 0;
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

      .button-side {
         display: inline-block;
      }

      .button-orange {
         display: inline-block;
         padding: 7px 20px;
         border-radius: 25px;
         text-decoration: none;
         color: #FFF;
         background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
         transition: .4s;
      }

      .button-orange:hover {
         background-image: linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
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
   <title>○○のブログサイト(´・ω・｀)</title>
</head>

<body>
   <h1 class="title">○○のブログ(´・ω・｀)</h1>

   <div class="report-textbox">
      <table class="report_table">
         <tr>
            <td>学生証番号</td>
            <td>：</td>
            <td>あああああ</td>
         </tr>
         <tr>
            <td>名前</td>
            <td>：</td>
            <td>あああああ</td>
         </tr>
         <tr>
            <td>工夫点</td>
            <td>：</td>
            <td>・最終更新日時の追加。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・各ページのボタンをCSSを用いて認識しやすくした。（新規投稿はオレンジ、削除・変更は青色）</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・各ページのボタン配置をCSSを用いてバランス良くした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・それぞれの投稿の全体を表示する範囲をCSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・それぞれの投稿者の投稿を表示する範囲をCSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・それぞれの投稿者の投稿のタイトルをCSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・それぞれの投稿のコメントを表示する範囲をCSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・それぞれのコメントを表示する範囲をCSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・入力欄に何を入力すべきかを明示した。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・新規投稿・編集・削除ページにおいて入力部分とそのほかの表示範囲をSSを用いて認識しやすくした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・削除ページでは削除する投稿の表示のみにして、テキストを変更できないようにした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・削除ページのリセットボタンを不必要なので削除した。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・CSSクラス名をケバブケースで統一し、わかりやすいものにした。</td>
         </tr>
         <tr>
            <td></td>
            <td></td>
            <td>・プログラムのインデントをできるだけ綺麗になるようにした。</td>
         </tr>
         <tr>
            <td>感想</td>
            <td>：</td>
            <td>半年間ありがとうございました。Webプログラミング楽しかったです。時々、課題の提出を遅延してしまいすみませんでした。</td>
         </tr>
      </table>
   </div>

   <a href="./post.php"><button type="button" class="button-orange">新規投稿</button></a>

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
         $updateTime = preg_split("/[\s.:-]+/", $row['updateDate']);
   ?>
         <div class="post-box">
            <div class="post-box-textbox">
               <h3 class="box-title"><?php echo $row['title'] ?></h3>
               <p>
                  <?php echo $row['contents'] ?><br>
                  (初回投稿日：<?php echo $time[0] . "年" . $time[1] . "月" . $time[2] . "日 " . $time[3] . ":" . $time[4] ?>)<br>
                  (投稿更新日：<?php echo $updateTime[0] . "年" . $updateTime[1] . "月" . $updateTime[2] . "日 " . $updateTime[3] . ":" . $updateTime[4] ?>)
               </p>
               <form action="delete.php" method="post" class="button-side">
                  <p>
                     <input type="submit" value="削除" class="button-blue">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  </p>
               </form>
               <form action="edit.php" method="post" class="button-side">
                  <p>
                     <input type="submit" value="編集" class="button-blue">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                  </p>
               </form>
            </div>
            <div class="post-box-textbox">
               <h3>コメント:</h3>
               <?php
               $sth2 = $dbh->prepare("select * from comments");
               $sth2->execute();
               while ($row2 = $sth2->fetch()) {
                  //テーブルの内容を１行ずつ処理
                  $time2 = preg_split("/[\s.:-]+/", $row2['date']);
                  if ($row2["pid"] == $row["id"]) {
               ?>
                     <p>
                        コメント投稿者：<?php echo $row2["name"] ?><br>
                        <?php echo $row2["contents"] ?><br>
                        (<?php echo $time2[0] . "年" . $time2[1] . "月" . $time2[2] . "日 " . $time2[3] . ":" . $time2[4] ?>)<br>
                        ----------------------------------------------------<br>
                     </p>
               <?php
                  }
               }
               ?>

               <form action="comment.php" method="post">
                  <p>
                     <input type="text" name="name" placeholder="名前" size="20" /> <br><br>
                     <textarea name="contents" placeholder="コメント" 　rows=“2" cols=“50"></textarea><br>
                     <input type="hidden" name="pid" value="<?php echo $row['id'] ?>" /><br>
                     <input type="submit" value="コメント投稿" class="button-orange" />
                  </p>
               </form>
            </div>
         </div>
   <?php
      }
   } catch (PDOException $e) {
      print "エラー!: " . $e->getMessage() . "<br/>";
      die();
   }
   ?>
</body>

</html>