<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

$newquery = "DELETE FROM tbl_product WHERE ID='$_POST[id]'";													
$new_query = "DELETE FROM tbl_prod_ingr WHERE prod_id='$_POST[id]'";
mysqli_query($connect, $newquery);	
mysqli_query($connect, $new_query);	
											
header('Location: ' . $_SERVER['HTTP_REFERER']);	