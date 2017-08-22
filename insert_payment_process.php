<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);

$money = mysqli_real_escape_string($conn, $_POST['money']);
$usage = mysqli_real_escape_string($conn, $_POST['usage']);
$usage_desc = mysqli_real_escape_string($conn, $_POST['usage_desc']);
$account = mysqli_real_escape_string($conn, $_POST['account']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = mysqli_real_escape_string($conn, $_POST['date']);

db_insert_payment($conn, $money,$usage,$usage_desc,$account,$category, $date);


header('Location: index.php');

 ?>
