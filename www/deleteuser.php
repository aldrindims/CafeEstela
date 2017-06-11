<?php

session_start();
		$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_login";
$result = mysqli_query($connect, $sql);


//$added = $_POST[size] - $_POST[amount]; //TANGGALIN

$newquery = "DELETE FROM tbl_login WHERE ID='$_POST[id]'";
mysqli_query($connect, $newquery);
header('Location: ' . $_SERVER['HTTP_REFERER']);
  

?>