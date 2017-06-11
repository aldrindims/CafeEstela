<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Prices</title>

		<script src="css3.css"></script>

		<!-- Bootstrap -->
		<link href="CSS/bootstrap.min.css" rel="stylesheet">
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
				<li><a href="adm.php">Stocks</a></li>
				<li><a href="admreports.php">Report</a></li>
				<li class="active"><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
				<li><a href="addprodingr.php">Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="prices" class="tab-pane fade in active" style="height: 480px; overflow-y: auto; margin-left:15px;"><!-------- Prices -------->
				
					<div class="row">
						<div class="col-md-2 affix">
							<nav role="navigation" >
								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a data-toggle="tab" href="#drinks">Drinks</a></li>
									<li><a data-toggle="tab" href="#meals">Meals</a></li>
								</ul>
							</nav>
						</div>
					</div>

					<div class="tab-content white-bg col-md-10 col-md-offset-2">
						<div id="drinks" class="tab-pane fade in active">
							<div class="row" style="width: 100%;">
								<div class="col-sm-12" style="margin: 0 auto; float: none;">
									<table class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
										<thead>
											<tr class="default">
												<td class="col-sm-3" ><b></b></td>
												<td class="col-sm-4" colspan="2" ><b>12oz</b></td>
												<td class="col-sm-4" colspan="2" ><b>16oz</b></td>
												<td class="col-sm-1" ><b></b></td>
											</tr>
											<tr class="default">
												<td class="col-sm-3" ><b>Ingredient</b></td>
												<td class="col-sm-2" ><b>Current</b></td>
												<td class="col-sm-2" ><b>New</b></td>
												<td class="col-sm-2" ><b>Current</b></td>
												<td class="col-sm-2" ><b>New</b></td>
												<td class="col-sm-1" ><b>&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;</b></td>
											</tr>
										</thead>
									</table>

									<?php
										///////////////////////////////////////////////////////////////////////session_start();
										$connect = mysqli_connect("localhost", "root", "", "test");

										$sql = "SELECT * FROM tbl_product";
										$result = mysqli_query($connect, $sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												$twelveoz = $row["price"];
												$sixoz = $row["price2"];
												$id = $row["id"];
									?>
												<table class="table-responsive table-bordered table-condensed custom-table">
													<tbody>
														<tr>
															<td class="col-sm-3"><b><?php echo $row["name"]; ?></b></td>
																<?php
																	echo "<form action = 'restock1.php' method=post>";
																	//echo $row['size'];
																	echo "<td class='col-sm-2'>" . '&#8369;' . $row['price'] . "</td>";
																		$price=$row['price'];
																	echo "<td> &#8369;<input type=number step='.01' name='p1' value='$price' class='input-price'/></td>";
																	echo "<td class='col-sm-2'>" .  '&#8369;' . $row['price2'] . "</td>";
																		$price2=$row['price2'];
																	echo "<td> &#8369;<input type=number step='.01'  name=p2 value='$price2' class='input-price'/></td>";
																	echo "<input type=hidden name=id value='".$row['id']."'/>"; ?>
																	<td class='col-sm-1'><input type=submit value=Update class='btn btn-sm btn-success' onClick = "return confirm('Are you sure you want to update?')" /></td>
																	<?php echo "</form>";
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


					<div id="meals" class="tab-pane fade">
						<div class="row" style="width: 100%;">
							<div class="col-sm-12" style="margin: 0 auto; float: none;">
								<table class="table table-responsive table-bordered table-condensed custom-table" style="margin: 0;">
									<thead>
										<tr class="default">


										</tr>
										<tr class="default">
											<td class="col-sm-4" ><b>Ingredient</b></td>
											<td class="col-sm-3" ><b>Current</b></td>
											<td class="col-sm-3" ><b>New</b></td>
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
														<td class="col-sm-4"><b><?php echo $row["name"]; ?></b></td>
															<?php
																echo "<form action ='restock2.php' method=post>";
																//echo $row['size'];
																echo "<td class='col-sm-3'>" . '&#8369;' . $row['price'] . "</td>";
																	$price=$row['price'];
																echo "<td class='col-sm-3'> &#8369;<input type=number name='p1' value='$price' class='input-price'/></td>";
																echo "<input type=hidden name=id value='".$row['id']."'/>";		?>
																<td class='col-sm-1'><input type=submit value=Update class='btn btn-sm btn-success' onClick = "return confirm('Are you sure you want to update?')" /></td>
																<?php echo "</form>";
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
<script>
	  $('#affix-this').affix({
    offset: {
      top: $('#affix-this').offset().top
    }
  })
</script>