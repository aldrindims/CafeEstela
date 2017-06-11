<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Delete Products</title>
	<script src="css3.css"></script>

	<link href="CSS/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
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
			<li><a href="adm.php">Stocks</a></li>
			<li><a href="admreports.php">Report</a></li>
			<li><a href="admprices.php">Prices</a></li>
			<li><a href="admacc.php">Account Management</a></li>
			<li class="active"><a href="addprodingr.php">Products</a></li>
		</ul>

		<div class="clearfix"></div>

		<div class="tab-content white-bg">
			<div id="stocks" class="tab-pane fade in active" style="height: 480px; overflow-y: auto; margin:0 0 0 15px; ">

				<ul class="nav nav-pills nav-stacked col-md-2 affix">
					<li><a href="addprodingr.php">Add New Drinks</a></li>
					<li><a href="addingr.php">Add New Ingredient</a></li>
					<li><a href="addmeals.php">Add New Meals</a></li>
					<li class="active"><a href="#delete">Delete Drinks</a></li>
					<li><a href="deletemeal.php">Delete Meals</a></li>
				</ul>

				<div class="tab-content white-bg col-md-10 col-md-offset-2">




					<div id="delete" class="tab-pane fade in active ">
						<div class="row center-block" style="width: 100%;">
							<div class="col-sm-11" style="margin: 0 auto; float: none;">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">Delete Drinks</div>
									</div>

									<div class="panel-body">
										<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
											<table class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
										<thead>
											<tr class="default">
												<td class="col-sm-8">Drink</td>
												<td>Action</td>
											</tr>
										</thead>
									</table>

									<?php
										$connect = mysqli_connect("localhost", "root", "", "test");

										$sql = "SELECT * FROM tbl_product";
										$result = mysqli_query($connect, $sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												$user = $row["name"];
												$id = $row["id"];

											/**	if($_SERVER['REQUEST_METHOD'] == "POST"){
													$newquery = "DELETE FROM tbl_product WHERE ID='$_POST[id]'";
													if(mysqli_query($connect, $newquery)){
														$new_query = "DELETE FROM tbl_prod_ingr WHERE prod_id='$_POST[id]'";
														mysqli_query($connect, $new_query);
													}
												} **/
									?>

													<table class="table-responsive table-bordered custom-table">
															<tbody>
																<tr>
																	<td class="col-sm-8">
																		<?php
																		echo $row["name"];

																		echo "<td style='vertical-align: middle;'>";
																		echo "<form action = 'delprod.php' method='post'>";
																		//echo $row['size'];
																		echo "<input type=hidden name=id value='".$row['id']."'/>";
																		?>
																		<input type="submit" value="Delete" onClick="return confirm('Are you sure you want to delete this product?');" class='btn btn-xs btn-danger'/>
																		<?php
																		echo "</form>";


																?>
															</td>
														</tr>
													</tbody>
												</table>

											<?php
												}
										} else {
												echo "<div class='alert alert-danger'>";
												echo "<p>0 results</p>";
												echo "</div>";
										}
										$connect->close();
									?>
										</div>
									</div>
								</div>
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




