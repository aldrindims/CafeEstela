<?php
	session_start();
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>View Stocks</title>
		<script src="css3.css"></script>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="CSS/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>
	<body>
		<div class="container-fluid" style="padding-top: 10px;">
			<div class="row">
				<div class="col-sm-2 text-left">
					<?php
						require_once("auth.php");
						echo "<span style='padding: 2px; background-color:rgba(255,255,255,0.5);'><b>Welcome, <span style='color:#ed0000;'>" . $_SESSION['user'] . "</span></b></span>";
					?>
				</div>
				<div class="col-sm-1 col-sm-offset-9">
					<form action="logout.php">
						<button name="" class="btn btn-danger btn-md"
							onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="row" style="margin-top: 10px;">
				<div class="col-sm-12">
					<div class="col-sm-12" style="margin-top: -1%"><h1 class="header"><img src="images/header.png"></h1></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-left">
				<li class="active"><a data-toggle="tab" href="#stocks">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
				<li><a href="addprodingr.php">Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active" style="height: 480px; overflow-y: scroll;">
					<div class="row center-block">
						<div class="col-sm-12">

							<table
								class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
								<thead>
									<tr class="default">
										<td class="col-sm-4" style="vertical-align: middle !important;"><b>Ingredient</b></td>
										<td class="col-sm-1" style="vertical-align: middle !important;"><b>Max
												quantity</b></td>
										<td class="col-sm-1" style="vertical-align: middle !important;"><b>Current
												quantity</b></td>
										<td class="col-sm-5" style="vertical-align: middle !important;"><b>Action</b></td>
									</tr>
								</thead>
							</table>

							<?php
								//session_start();
								$connect = mysqli_connect("localhost", "root", "", "test");

								$sql = "SELECT * FROM tbl_ingredients";
								$result = mysqli_query($connect, $sql);


								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										//$sizes = $row["size"];
										$id = $row["id"];
										$size = $row['MaxSize'];
							?>

										<table class="table-responsive table-bordered table-condensed custom-table" width=100%>
											<tbody>
												<tr>
													<td class="col-sm-4">
														<?php
															echo "<b>" . $row ["name"] . "</b>";

															if ($row ['size'] <= 0) {
																echo "  <font color='red'><b><i>Out of Stock</i></b></font>";
															}else if ($row ['size'] <= $size * .25) {
																echo "  <font color='red'><b><i>STOCK BELOW 25%</i></b></font>";
															}else if ($row ['size'] <= $size * .50) {
																echo "  <font color='red'><b><i>STOCK BELOW 50%</i></b></font>";
															}
														?>
													</td>
													<td class="col-sm-1"><?php echo $row['MaxSize']; ?> </td>
													<td class="col-sm-1">
														<?php
															echo "<form action = 'restock.php' method=post>";
															echo $row ['size'];
															// $_SESSION['currentsize'] = $row['size'];
															echo "</td>";
															echo "<td class='col-sm-5'>";
															echo "<input type=number step='.01' min=0 name=amount placeholder='Quantity'/> ";
															echo "<input type=hidden name=id value='" . $row ['id'] . "'/>";
															echo "<input type=hidden name=currentsize value='" . $row ['size'] . "'/>";
															echo "<input type=hidden name=beforesize value='" . $row ['temp'] . "'/>";
															echo "<input type=hidden name=maxsize value='" . $row ['MaxSize'] . "'/>";
															echo "<input type=hidden name=ingr value='" . $row ['name'] . "'/>";////////////////?>
															<input type=submit name=btn value=Restock onClick = "return confirm('Are you sure you want to restock?')" class='btn btn-sm btn-success'/>

															<input type=submit name= btn value=Undo class='btn btn-sm btn-warning' <?php if($row ['temp'] == 0){ ?> disabled <?php   } ?>
															onClick = "return confirm('Are you sure you want to undo?')"/>

															<?php
															echo "</form>";
															echo "</td>";
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

				<div id="report" class="tab-pane fade">
					<h1>REPORT</h1>

					<ul class="nav nav-pills nav-stacked col-xs-1">
						<li class="active"><a data-toggle="tab" href="#daily">Daily</a></li>
						<li><a data-toggle="tab" href="#weekly">Weekly</a></li>
					</ul>

					<div class="tab-content">
						<div id="daily" class="tab-pane fade in active">
							<h1>DAILY CONTENT</h1>
						</div>

						<div id="weekly" class="tab-pane fade">
							<h1>WEEKLY CONTENT</h1>
						</div>
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