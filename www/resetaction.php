<?php 

session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

 $id = $_SESSION['id'];
 $pass =  $_POST['pass'];
 $query = "UPDATE `tbl_login` SET `password` = '$pass' WHERE `id` = $id;";
 
 mysqli_query($connect, $query);
 
 header('Location: ' . 'USER1.php');

?>