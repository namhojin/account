<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>account</title>
  </head>
  <body>

    
     <form class="" action="insert_payment_process.php" method="post">
       <p>금액 : <input type="number" name="money" value=""></p>
       <p>사용처 : <input type="text" name="usage" value=""></p>
       <p>사용내역 : <input type="text" name="usage_desc" value=""></p>
       <p>계좌 : <input type="text" name="account" value=""></p>
       <p>분류 : <input type="text" name="category" value=""></p>
       <p>날짜 : <input type="date" name="date" value=""></p>

       <p><input type="submit" name="" value="제출"></p>

     </form>




  </body>
</html>
