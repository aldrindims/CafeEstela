<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 $username = $_POST['user'];
 $password = $_POST['pass'];

$connection = mysqli_connect("localhost","root","");
 mysqli_select_db($connection,"test");
 
 
 $sql = "SELECT * FROM tbl_report_total";
$result = mysqli_query($connection, $sql);

$newquery = "UPDATE tbl_report_total SET user_temp ='$username' WHERE ID=1";
mysqli_query($connection, $newquery);
 
 
$username = stripcslashes($username);

$password = stripcslashes($password);
$username = mysqli_real_escape_string($connection, $_POST['user']);
$password = mysqli_real_escape_string($connection, $_POST['pass']);

 
 
 
 $result = mysqli_query($connection,"select * from tbl_login where username = '$username' and password = '$password'") 
 or die("Failed to query database " .mysqli_error());
 $row = mysqli_fetch_array($result);
 if($row['username'] == $username && $row['password'] == $password && $username == ("admin")){
	 $_SESSION['user'] = $username;	 	     
	 $_SESSION['count'] = '1';	
	 header("Location: adm.php");
 }else if($row['username'] == $username && $row['password'] == $password && $username != ("admin")){
	 $_SESSION['user'] = $username;	 	     
	 $_SESSION['count'] = '2';	
	 header("Location: home1.php");
 }else{
	 echo "<font color='white'>Incorrect username/password!</font>"	;
	 include('USER1.php');
	 
 }
 


	
	 
 ?>
 