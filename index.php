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

    <input type="button" name="" value="입력" onclick="location.href='input_payment.php'";>

    <table border="1">
      <tr>
        <th>+/-</th>
        <th>금액</th>
        <th>사용처</th>
        <th>사용내역</th>
        <th>계좌</th>
        <th>분류</th>
        <th>날짜</th>
      </tr>



    <?php
    $sql = "SELECT * FROM `payment`";
    $result = mysqli_query($conn, $sql);

    while( $row = mysqli_fetch_assoc($result)){

      echo "<tr><td>".htmlspecialchars($row['num'])."</td><td>".htmlspecialchars($row['money'])."</td><td>".htmlspecialchars($row['usage'])."</td><td>".htmlspecialchars($row['usage_desc'])."</td><td>".htmlspecialchars($row['account'])."</td><td>".htmlspecialchars($row['category'])."</td><td>".htmlspecialchars($row['date'])."</td></tr>";

    }
     ?>
     </table>



  </body>
</html>
