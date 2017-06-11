<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

$newquery = "DELETE FROM tbl_meals WHERE ID='$_POST[id]'";
$new_query = "DELETE FROM tbl_meals_ingr WHERE prod_id='$_POST[id]'";
mysqli_query($connect, $new_query);
mysqli_query($connect, $newquery);
											
header('Location: ' . $_SERVER['HTTP_REFERER']);	