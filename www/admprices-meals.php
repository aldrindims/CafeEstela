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

		<!-- Bootstrap -->
		<link href="CSS/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-1 col-sm-offset-11">
					<form action = "logout.php" >
						<button name="" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>
				<div class="col-sm-12">
					<h1 class="header">CAFE ESTELA</h1>
				</div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-left">
				<li><a href="adm.php">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li class="active"><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="prices" class="tab-pane fade in active" style="height: 480px; overflow-y: scroll;"><!-------- Prices -------->
					<div class="row center-block">
						<div class="col-sm-12">

							<table class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
								<thead>
									<tr class="default">
										
										
									</tr>
									<tr class="default">
										<td class="col-sm-3" ><b>Ingredient</b></td>
										<td class="col-sm-2" ><b>Current</b></td>
										<td class="col-sm-2" ><b>New</b></td>										
										<td class="col-sm-1" ><b>&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;</b></td>
									</tr>
								</thead>
							</table>

							<?php
								///////////////////////////////////////////////////////////////////////session_start();
								$connect = mysqli_connect("localhost", "root", "", "test");

								$sql = "SELECT * FROM tbl_meals";
								$result = mysqli_query($connect, $sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$twelveoz = $row["price"];
										
										$id = $row["id"];
							?>
										<table class="table-responsive table-bordered table-condensed custom-table" width=100%>
											<tbody>
												<tr>
													<td class="col-sm-3"><b><?php echo $row["name"]; ?></b></td>
														<?php
															echo "<form action ='restock2.php' method=post>";
															//echo $row['size'];
															echo "<td class='col-sm-2'>" . $row['price'] . "</td>";
																$price=$row['price'];
															echo "<td><input type=text name='p1' placeholder='$price' class='input-price'/></td>";																														
															echo "<input type=hidden name=id value='".$row['id']."'/>";
															echo "<input type=hidden name=price onclick=alert() value='".$row['price']."'/>"; //TANGGALIN ITO															
															echo "<td class='col-sm-1'><input type=submit value=Update class='btn btn-sm btn-success' /></td>";
															echo "</form>";
														?>
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="CSS/bootstrap.min.js"></script>



	</body>
</html>