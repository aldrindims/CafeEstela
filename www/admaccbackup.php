<?php

//session_start();

require_once("auth.php");
	

 

echo $_SESSION['user'];


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin View</title>
		<script src="css3.css"></script>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="CSS/admin-css.css"  >
		<link href="CSS/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action = "logout.php" >
					<button name="" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				<div class="col-sm-12"><h1>Cafe Estela</h1></div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-right">
				<li><a href="adm.php">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li class="active"><a href="admacc.php">Account Management</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active">					
<div>
					<h1>Manage User Accounts</h1>
					
					<ul class="nav nav-pills nav-stacked col-xs-1">
						<li class="active"><a data-toggle="tab" href="#create">Create New Account</a></li>
						<li><a data-toggle="tab" href="#password">Change Password</a></li>
						<li><a data-toggle="tab" href="#delete">Delete Account</a></li>
					</ul>

					<div class="tab-content">
						<div id="create" class="tab-pane fade in active">
							<?php
error_reporting(E_ALL ^ E_DEPRECATED);
///////////////////////////////////////////////////////////////////////////////session_start();
$_SESSION['message'] = '';
  $dbhandle = mysql_connect('localhost', 'root', '');

  $selected = mysql_select_db("test", $dbhandle);

    if(isset($_POST['username']) && isset($_POST['password'])){
      if($_POST['password']==$_POST['confirmpassword']){
      $user = $_POST['username'];
      $pass = $_POST['password'];
	  $secu1 = $_POST['sec1'];
	  $secu2 = $_POST['sec2'];
	  $anse1 = $_POST['ans1'];
	  $anse2 = $_POST['ans2'];

      $query = mysql_query("SELECT * FROM tbl_login WHERE username ='$user'");
      if(mysql_num_rows($query) > 0){
        $_SESSION['message'] = "There is already a user with that username";
      }
      else{
		  
        mysql_query("INSERT INTO tbl_login (username, password, q1, ans1 ,q2, ans2) VALUES ('$user', '$pass', '$secu1', '$anse1', '$secu2', '$anse2' )");
		
        //header("location: admacc.php"); //////////////////////////////////////////////////////////////////////////
      }
    }else{
      $_SESSION['message'] = "Passwords did not match";
  }
}
    mysql_close($dbhandle);
?>

    <h1>Create an account</h1>
    <form action="" method="post">
    <div class="alert alert-error"><?= $_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="password" placeholder="Password" name="password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" required /><br>
	  <input type="text" size="50px" placeholder="Enter security question #1" name="sec1" required /><br>
	  <input type="text" size="50px" placeholder="Answer" name="ans1" required /><br>
	  <input type="text" size="50px" placeholder="Enter security question #2" name="sec2" required /><br>
	  <input type="text" size="50px" placeholder="Answer" name="ans2" required /><br>      
      <input type="submit" value="Register" name="register"/>
    </form>
						</div>

						<div id="password" class="tab-pane fade">
							<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$_SESSION['message'] = '';
  $dbhandle = mysqli_connect('localhost', 'root', '', 'test');

  $connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_login";
$result = mysqli_query($connect, $sql);



    // output data of each row
	

			
  
  
    if(isset($_POST['dropdown']) && isset($_POST['currentpassword']) && isset($_POST['newpassword'])){
		
       $user = $_POST['dropdown'];
      $oldpass = $_POST['currentpassword'];
      $newpass = $_POST['newpassword'];
      $query = mysqli_query($dbhandle,"SELECT * FROM tbl_login WHERE username ='$user'");
      if(mysqli_num_rows($query) > 0){
        $sql = mysqli_query($dbhandle,"SELECT * FROM tbl_login WHERE password ='$oldpass'");
        if(mysqli_num_rows($sql) > 0){
        if($_POST['currentpassword'] !== $_POST['newpassword']){
            if($_POST['newpassword'] === $_POST['confirmpassword']){
				
                mysqli_query($dbhandle,"UPDATE tbl_login SET password= '$newpass' WHERE username='$user'");				                
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				
            }
            else{
                $_SESSION['message'] = "Your new passwords did not match";
            }
        }
        else{
            $_SESSION['message'] = "Current password and new password cannot be the same";    
        }
    }else{
        $_SESSION['message'] = "Wrong Password";
    }
      }
      else{
        $_SESSION['message'] = "There is no such account";
      }

    }
    mysqli_close($dbhandle);
?>

    <h1>Change password</h1>
    <!-- <form action="" method="post"> -->
    <div class="alert alert-error"><?= $_SESSION['message']?></div>
      <!-- <input type="text" placeholder="User Name" name="username" required /> -->
	  
	  <?php 
	  
	  echo "<form method='post' action=''>";
	echo "<select name='dropdown'>";
    while($row = $result->fetch_assoc()) {
		$user = $row["username"];
		$id = $row["id"];		
    	?>		

    	<?php
		
		echo "<option value=" . $user .">" . $user ."</option>";?>
        <?php				
		
		
	}
	echo "</select>";
	?>
	  
      <input type="password" placeholder="Current Password" name="currentpassword" required />
      <input type="password" placeholder="New Password" name="newpassword" required />
      <input type="password" placeholder="Confirm New Password" name="confirmpassword" required />
      <input type="submit" value="Submit" name="register"/>
    </form>
						</div>
						
						
						<div id="delete" class="tab-pane fade">
						
						<?php
		
		$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_login";
$result = mysqli_query($connect, $sql);

if ($result->num_rows > 0) {



    // output data of each row
    while($row = $result->fetch_assoc()) {
		$user = $row["username"];
		$id = $row["id"];
		
		
    	?>		
    	<table border="1" width="100%">
        <thead>
        <tr>

        </tr>
        </thead>
        <tbody>
        <tr>		
        <td class="col-sm-8"><?php 
		
		if($row["username"] != 'admin'){
			
		
		echo $row["username"]; 
		
		echo "<td>";
		echo "<form action = 'deleteuser.php' method=post>"; 
		//echo $row['size'];		
		echo "<input type=hidden name=id value='".$row['id']."'/>";		
		echo "<input type=submit value=Delete />";				
		echo "</form>";
		
		}
		?></td>
		
        						
		</td>
        </tr>
        </tbody>
        </table>
        <?php
    }
} else {
    echo "0 results";
}

$connect->close();
	?>
						
						
						</div>
						
						
					</div>
					
				</div>	
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="CSS/bootstrap.min.js"></script>
	
	
  
	<form action = "restock.php" method="GET">
		<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">          
          <h4 class="modal-title"><b/>Restock</h4>		  
        </div>
        <div class="modal-body p-b-0">	


		<input type="number" required="required" placeholder="Enter Amount" id="amount" name="amount" style="height:50px;"/>
		<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">



		<p id="error"/>
        </div>		
        <div class="modal-footer">
		<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">Cancel</span>
          </button> -->
		<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" id="submitbutton" />
		<input type="submit" class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt" value="Cancel" formnovalidate/>
		</div>
      </div>
    </div>
  </div>
  </form>  
  
  
  
  
  
	</body>
</html>