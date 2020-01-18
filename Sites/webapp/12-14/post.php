<html>

<head>
	<meta charset="utf-8">
	<style type="text/css">
		<!--
		body {
			text-align: center;
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
		-->
	</style>
	<title>ブログ記事の投稿</title>
</head>

<body>
	<div class="text-box">
		<?php
		if (isset($_POST["title"]) && isset($_POST["contents"])) {
			if (!isset($_POST["password"]) || $_POST["password"] != "aaaaa") {
				echo '<p>パスワードが違います</p>';
			} else {
				try {
					//PDOクラスのオブジェクトの作成
					$dbh = new PDO('sqlite:blog.db', '', '');

					//タイムゾーンの指定
					ini_set("date.timezone", "Asia/Tokyo");

					//$timeへ成形した年月日および時刻データを格納
					$time = date("Y.m.d-H:i");

					//実行するSQL文を$sqlに格納
					$sql = 'insert into posts (title, contents, date, updateDate) values (?, ?, ?, ?)';

					//prepareメソッドでSQL文の準備
					$sth = $dbh->prepare($sql);

					//prepareした$sthを実行　SQL文の？部に格納する変数を指定
					$sth->execute(array($_POST["title"], $_POST["contents"], $time, $time));

					if ($sth) {
						echo "記事１件を投稿しました";
					} else {
						echo "記事１件の投稿に失敗しました";
					}
				} catch (PDOException $e) {
					print "エラー!: " . $e->getMessage() . "<br/>";
					die();
				}
			}
		}
		$dbh = null;
		?>
		<p><a href="index.php">blog閲覧ページはこちら</a></p>
	</div>
	<div class="post-box-textbox">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<p class="box-title"><input type="text" name="title" value="<?php echo $_POST["title"] ?>" size="60" /></p>
			<p><textarea name="contents" placeholder="コメント" 　rows="10" cols="60"><?php echo $_POST["contents"] ?></textarea></p>
			<p>パスワード<br><input type="password" name="password" size="20" /></p>
			<input type="hidden" name="id" value="<?php echo $_POST["id"] ?>" />
			<input type="submit" value="新規投稿" class="button-orange" />
		</form>
		<br>
	</div>
</body>

</html>