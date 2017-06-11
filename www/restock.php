<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_ingredients";
$result = mysqli_query($connect, $sql);
$updatedamount = 0;
$val = $_POST['btn'];
$amount = $_POST["amount"];
$maxsize = $_POST['maxsize'];
if($_POST["amount"] != 0 && $_POST["amount"] > 0){
if($val == 'Restock'){

$updatedamount = $_POST["currentsize"] + $_POST["amount"];

if($updatedamount <= $maxsize){
	
$newquery = "UPDATE tbl_ingredients SET size ='$updatedamount' WHERE ID='$_POST[id]'";
$newquery2 = "UPDATE tbl_ingredients SET temp ='$amount' WHERE ID='$_POST[id]'";
mysqli_query($connect, $newquery);
mysqli_query($connect, $newquery2);

$date = date("Y-m-d");
$name = $_POST['ingr'];
$sql1 = "INSERT INTO `tbl_restock_date` (`date_time`, `ingredients`, `amount_restocked`) VALUES (CURRENT_TIMESTAMP, '$name', $amount);";
mysqli_query($connect, $sql1);


}else{
	
	$newquery2 = "UPDATE tbl_ingredients SET temp ='0' WHERE ID='$_POST[id]'";
	mysqli_query($connect, $newquery2);	
}	


}
	
	
}



if($val == 'Undo'){
	$updatedamount = $_POST["currentsize"] - $_POST["beforesize"];
$newquery = "UPDATE tbl_ingredients SET size ='$updatedamount' WHERE ID='$_POST[id]'";
$newquery2 = "UPDATE tbl_ingredients SET temp ='0' WHERE ID='$_POST[id]'";
mysqli_query($connect, $newquery);	
mysqli_query($connect, $newquery2);	
}



$connect->close();

/**

if(isset($_POST['click']))
{
    $date_clicked = date('Y-m-d H:i:s');;
    $_SESSION['date'] = $date_clicked;
}	
$name = $_SESSION['ingr'];

$sql2 = "SELECT * FROM tbl_report_stocks";
$query = "INSERT INTO tbl_report_stocks (data_time, ingredients) VALUES ('$date_clicked', $name)";
mysqli_query($connect, $query);

	
**/
header('Location: ' . $_SERVER['HTTP_REFERER']);
  

?>