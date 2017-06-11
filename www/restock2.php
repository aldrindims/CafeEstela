<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_meals";
$result = mysqli_query($connect, $sql);


//$added = $_POST[size] - $_POST[amount]; //TANGGALIN

$newquery = "UPDATE tbl_meals SET price ='$_POST[p1]' WHERE ID='$_POST[id]'";
mysqli_query($connect, $newquery);
header('Location: ' . $_SERVER['HTTP_REFERER']);
  

?>