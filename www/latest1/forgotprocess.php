<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 $username = $_POST['user'];
 

$_SESSION['username'] = '';
$_SESSION['id'] = '';
$connection = mysqli_connect("localhost","root","");
 mysqli_select_db($connection,"test");
 
 
$username = stripcslashes($username);

$username = mysqli_real_escape_string($connection, $_POST['user']);


 
 
 
 $result = mysqli_query($connection,"select * from tbl_login where username = '$username'") 
 or die("Failed to query database " .mysqli_error());
 $row = mysqli_fetch_array($result);
 if($row['username'] == $username){
	 $_SESSION['username'] = $username;
	 $_SESSION['id'] = $row['id'];
	 header("Location: forgot.php");	     	 
 }else{
	 echo "<font color='white'>Incorrect username</font>"	;
	 include('security.php');
 
 }
	
	 
 ?>
 