<?php
	//session_start();
	require_once("auth.php");
	echo "Welcome, " . $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Admin View</title>
		<script src="css3.css"></script>

		<link href="CSS/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/home.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-1 col-sm-offset-11">
					<form action="logout.php">
						<button name="" class="btn btn-danger btn-xs"
							onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12" style="margin-top: -1%"><h1 class="header"><img src="images/header.png"></h1></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-left">
				<li><a href="adm.php">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li class="active"><a href="admacc.php">Account Management</a></li>
				<li><a href="addprodingr.php">Add Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active" style="height: 500px; overflow-y: auto; margin:0 0 0 15px; ">					
					
					<ul class="nav nav-pills nav-stacked col-md-2">
						<li class="active"><a data-toggle="tab" href="#create">Create New
								Account</a></li>
						<li><a data-toggle="tab" href="#password">Change Password</a></li>
						<li><a data-toggle="tab" href="#delete">Delete Account</a></li>
					</ul>

					<div class="tab-content white-bg col-md-10">
						<div id="create" class="tab-pane fade in active">
							<div class="row center-block" style="width: 100%;">
								<div class="col-sm-8" style="margin: 0 auto; float: none;">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">Create New Account</div>
										</div>

										<div class="panel-body">
											<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
												<form action="" method="post" class="form-horizontal" role="form">
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
																echo "<div class='alert alert-danger'>";
																echo "<p>". $_SESSION['message'] . "</p>";
																echo "</div>";
															}
															else{
				  
														        mysql_query("INSERT INTO tbl_login (username, password, q1, ans1 ,q2, ans2) VALUES ('$user', '$pass', '$secu1', '$anse1', '$secu2', '$anse2' )");
																
														        //header("location: admacc.php"); //////////////////////////////////////////////////////////////////////////
														      }
														    }else{
														      $_SESSION['message'] = "Passwords did not match";
														      echo "<div class='alert alert-danger'>";
														      echo "<p>". $_SESSION['message'] . "</p>";
														      echo "</div>";
														  	}
														}
		  	  											mysql_close($dbhandle);
													?>

													<div class="form-group">
														<label for="username" class="col-md-3 control-label">Username</label>
														<div class="col-md-9">
															<input type="text" placeholder="User Name" name="username" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="password" class="col-md-3 control-label">Password</label>
														<div class="col-md-9">
															<input type="password" placeholder="Password" name="password" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="confirmpassword" class="col-md-3 control-label">Confirm Password</label>
														<div class="col-md-9">
															<input type="password" placeholder="Confirm Password" class="form-control" name="confirmpassword" required />
														</div>
													</div>

													<div class="form-group">
														<label for="sec1" class="col-md-3 control-label">Security Question #1</label>
														<div class="col-md-9">
															<input type="text" size="50px" placeholder="Enter security question #1" name="sec1" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="ans1" class="col-md-3 control-label">Answer</label>
														<div class="col-md-9">
															<input type="text" size="50px" placeholder="Answer" name="ans1" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="sec2" class="col-md-3 control-label">Security Question #2</label>
														<div class="col-md-9">
															<input type="text" size="50px" placeholder="Enter security question #2" name="sec2" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="ans2" class="col-md-3 control-label">Answer</label>
														<div class="col-md-9">
															<input type="text" size="50px" placeholder="Answer" name="ans2" class="form-control" required />
														</div>
													</div>

													<input type="submit" value="Register" name="register" class='btn btn-md btn-success'/>     
      
   	 											</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="password" class="tab-pane fade">
							<div class="row center-block" style="width: 100%;">
								<div class="col-sm-8" style="margin: 0 auto; float: none;">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="panel-title">Change Password</div>
										</div>

										<div class="panel-body">
											<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
												<form action="" method="post" class="form-horizontal" role="form">
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
													        if($_POST['currentpassword'] != $_POST['newpassword']){
													            if($_POST['newpassword'] === $_POST['confirmpassword']){
																	
													                mysqli_query($dbhandle,"UPDATE tbl_login SET password= '$newpass' WHERE username='$user'");				                
																	//header('Location: ' . 'admacc.php');
																	
													            }
													            else{
													                $_SESSION['message'] = "Your new passwords did not match";
													                echo "<div class='alert alert-danger'>";
													                echo "<p>". $_SESSION['message'] . "</p>";
													                echo "</div>";
													            }
													        }
													        else{
													            $_SESSION['message'] = "Current password and new password cannot be the same";   
													            echo "<div class='alert alert-danger'>";
													            echo "<p>". $_SESSION['message'] . "</p>";
													            echo "</div>"; 
													        }
													    }else{
													        $_SESSION['message'] = "Wrong Password";
													        echo "<div class='alert alert-danger'>";
													        echo "<p>". $_SESSION['message'] . "</p>";
													        echo "</div>";
													    }
													      }
													      else{
													        $_SESSION['message'] = "There is no such account";
													        echo "<div class='alert alert-danger'>";
													        echo "<p>". $_SESSION['message'] . "</p>";
													        echo "</div>";
													      }

													    }
													    mysqli_close($dbhandle);
													?>
													<div class="form-group">
														  <?php
															echo "<form method='post' action=''>";
														  echo "<label for='dropdown' class='col-md-3 control-label'>Username</label>";
														  echo "<div class='col-md-9'>";
															echo "<select name='dropdown' class='form-control'>";
																while($row = $result->fetch_assoc()) {
																	$user = $row["username"];
																	$id = $row["id"];		
												    	?>		

												    	<?php
														if($row["username"] != 'admin'){
															echo "<option value=" . $user .">" . $user ."</option>";?>
												        <?php	
															}
																}
															echo "</select>";
															echo "</div>";
														?>
													</div>

													<div class="form-group">
														<label for="currentpassword" class="col-md-3 control-label">Current Password</label>
														<div class="col-md-9">
															<input type="password" placeholder="Current Password" name="currentpassword" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="newpassword" class="col-md-3 control-label">New Password</label>
														<div class="col-md-9">
															<input type="password" placeholder="New Password" name="newpassword" class="form-control" required />
														</div>
													</div>

													<div class="form-group">
														<label for="confirmpassword" class="col-md-3 control-label">Confirm Password</label>
														<div class="col-md-9">
															<input type="password" placeholder="Confirm Password" name="confirmpassword" class="form-control" required />
														</div>
													</div>
													      
											      <input type="submit" value="Submit" name="register" class='btn btn-md btn-success' onClick = "return confirm('Are you sure you want to change the password?')"/>
											    </form>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						
						
						<div id="delete" class="tab-pane fade" style="max-height: 480px; overflow-y: auto;">
							<div class="row center-block" style="width: 80%;">
								<div class="col-sm-12" >

									<table class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
										<thead>
											<tr class="default">
												<td class="col-sm-8">Username</td>
												<td>Action</td>
											</tr>
										</thead>
									</table>
						
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

			    								<table class="table-responsive table-bordered custom-table">
			        								<tbody>
			        									<tr>		
			        										<td class="col-sm-8">
			        											<?php 
																	if($row["username"] != 'admin'){
																		echo $row["username"]; 
																		
																		echo "<td>";
																		echo "<form action = 'deleteuser.php' method=post>"; 
																		//echo $row['size'];		
																		echo "<input type=hidden name=id value='".$row['id']."'/>";		
																		echo "<input type=submit value=Delete class='btn btn-xs btn-danger'/>";				
																		echo "</form>";
					
																	}
																?>
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
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="CSS/bootstrap.min.js"></script>
	
	
  
	<!-- <form action = "restock.php" method="GET">
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
	<!--	<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" id="submitbutton" />
		<input type="submit" class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt" value="Cancel" formnovalidate/>
		</div>
      </div>
    </div>
  </div>
  </form>   -->

</body>	
</html>

<script>
$(document).ready(function() {
		if (location.hash) {
				$("a[href='" + location.hash + "']").tab("show");
		}
		$(document.body).on("click", "a[data-toggle]", function(event) {
				location.hash = this.getAttribute("href");
		});
});
$(window).on("popstate", function() {
		var anchor = location.hash || $("a[data-toggle='tab']").first().attr("href");
		$("a[href='" + anchor + "']").tab("show");
});
</script>