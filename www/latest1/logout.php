<?php
Session_start();

if(isset($_POST['zerotemp'])){
$value = $_POST['zerotemp'];
}



$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_ingredients";
$result = mysqli_query($connect, $sql);

if(isset($value) == "Logout"){

Session_destroy();
header('Location: ' . 'USER1.php');

$newquery2 = "UPDATE tbl_ingredients SET temp =0";
mysqli_query($connect, $newquery2);	

}



Session_destroy();
$newquery2 = "UPDATE tbl_ingredients SET temp =0";
mysqli_query($connect, $newquery2);	
header('Location: ' . 'USER1.php');

?>


