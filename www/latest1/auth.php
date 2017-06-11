<?php
	//Start session
	session_start();

if ($_SESSION['count'] == '2') {
    header('Location: home1.php');
	
}elseif ($_SESSION['count'] == '0') {
	header('Location: USER1.php');
}
?>
	