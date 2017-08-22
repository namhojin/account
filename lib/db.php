<?php
function db_init($host, $duser, $dpw, $dname){
  $conn = mysqli_connect($host, $duser, $dpw);
  mysqli_select_db($conn, $dname);
  return $conn;
}

function db_insert_payment($conn, $money,$usage,$usage_desc,$account,$category, $date){
  $sql = "INSERT INTO `payment` (`money`,`usage`,`usage_desc`,`account`,`category`,`date`) VALUES(".$money.",'".$usage."','".$usage_desc."','".$account."','".$category."','".$date."')";
  $result = mysqli_query($conn, $sql);

  return $result;

}
?>
