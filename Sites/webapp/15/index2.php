<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>残高照会</title>
</head>
<body>
<h1>残高照会</h1>
<hr/>
<?php

if (isset($_POST["id"]) && isset($_POST["passwd"]) && $_POST["passwd"]!=null) {
  try{
    $dbh = new PDO('sqlite:blog2.db','','');
    $sql ="select * from idpasswd where id='".@$_POST["id"]."' and passwd=".@$_POST["passwd"].";";
    echo $sql."<br><br>";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $row = $sth->fetch();
    
    if($row['id']!=null){ 
      echo $row['id']."さんの残高は<br>";
      echo $row['balance']."円です。<br>";
    } else {
      echo "表示できません。";
    }

  } Catch (PDOException $e) {
    print "エラー!: " . $e->getMessage() . "<br/>";
    die();
  }
}
?>
     <P>
     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  ID:    <input type="id" name="id" /><br>
  暗証番号:       <input type="text" name="passwd" size="20" /><br>
         <input type="submit" value="送信" />
     </form>
     </p>
  </body>
 </html>