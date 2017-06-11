<?php
	session_start();
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Reports</title>
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
					<li class="active"><a href="admreports.php">Report</a></li>
					<li><a href="admprices.php">Prices</a></li>
					<li><a href="admacc.php">Account Management</a></li>
					<li><a href="addprodingr.php">Products</a></li>
				</ul>

				<div class="clearfix"></div>

					<div>
						<div class="tab-content white-bg">
							<div id="daily" class="tab-pane fade in active" style="height: 480px; overflow-y: auto; margin:0 15px 0 15px;" >
								<h4><b>View Transactions</b></h4>
								<form action="admreports.php" method="GET">
									<div style="width: 70%;" class="col-md-10 center-block" >
										<div class="form-group col-md-5">
											<label for="startdate" class="col-md-5 control-label">Pick start date: </label>
											<div class="col-md-7">
												<input type="date" name="startdate" class="form-control" required />
											</div>
										</div>

										<div class="form-group col-md-5">
											<label for="startdate" class="col-md-5 control-label">Pick end date: </label>
											<div class="col-md-7">
												<input type="date" name="enddate" class="form-control" required />
											</div>
										</div>
										<div class="col-md-2"><input type="submit" value="Search" class="btn btn-sm btn-success" style="margin-left: -8em;"></div>
									</div>
								</form>

								<table class="table table-bordered white-bg col-md-8" style="font-size: 1em;">
									<thead class="default">
										<tr>
											<th width="20%">Transaction Number</th>
											<th width="40%">Transaction Date</th>
											<th width="40%">Amount</th>
										<tr>
									</thead>

									<tbody>
										<?php
										$connect = mysqli_connect("localhost", "root", "", "test");
										if(isset($_GET["startdate"]) && isset($_GET["enddate"])){
										$a=$_GET["startdate"];
										$b=$_GET["enddate"];

										$sql = "SELECT * FROM tbl_report_total WHERE date BETWEEN '$a' AND '$b'";
										$result= mysqli_query($connect,$sql);
										while($row = $result->fetch_assoc()){?>
										<tr>
											<td><a href="#myModal" class="btn btn-default btn-small" id="custId" data-toggle="modal" data-id="<?php echo $row["trans_no"]?>"><?php echo $row["trans_no"]?></a></td>
											<td><?php echo $row["date"]?></td>
											<td><?php echo "&#8369;" . $row["total"]?></td>
										</tr>
										<?php
										}
									}
									else{
										$today = date("Y-m-d");
										$_GET["startdate"] = $today;
										$_GET["enddate"] = $today;
										$a=$_GET["startdate"];
										$b=$_GET["enddate"];

										$sql = "SELECT * FROM tbl_report_total WHERE date BETWEEN '$a' AND '$b'";
										$result= mysqli_query($connect,$sql);
										while($row = $result->fetch_assoc()){?>
										<tr>
											<td><a href="#myModal" class="btn btn-default btn-small" id="custId" data-toggle="modal" data-id="<?php echo $row["trans_no"]?>"><?php echo $row["trans_no"]?></a></td>
											<td><?php echo $row["date"]?></td>
											<td><?php echo "&#8369;" . $row["total"]?></td>
										</tr>
										<?php
										}
									}
										?>

									</tbody>
									<thead>
										<tr>
										<th colspan="2" class="text-right">Total Sales:</th>
										<?php
											$sql="SELECT sum(total) FROM tbl_report_total WHERE date BETWEEN '2017-02-12' AND '2017-03-15'";
											if(isset($_GET["startdate"]) && isset($_GET["enddate"])){
												$a=$_GET["startdate"];
												$b=$_GET["enddate"];

												$sql = "SELECT sum(total) FROM tbl_report_total WHERE date BETWEEN '$a' AND '$b'";
												$result= mysqli_query($connect,$sql);
												while($row = $result->fetch_assoc()){?>
													<th><?php echo "&#8369;" . $row["sum(total)"]?></th>
										<?php	}
									}
										?>
										</tr>
									</thead>


								</table>

							</div>

							<!-- <div id="weekly" class="tab-pane fade">
								<h1>WEEKLY CONTENT</h1>


							</div> -->
						</div>

					</div>

			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="CSS/bootstrap.min.js"></script>



		<form action = "restock.php" method="GET">
			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header bg-warning">
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

	<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
							<div class="modal-header bg-warning">
									
									<h4 class="modal-title">Summary of Order</h4>
							</div>
							<div class="modal-body">
									<div class="fetched-data">

									</div>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
					</div>
			</div>
	</div>

		</body>
		<script>
					$(document).ready(function(){
			$('#myModal').on('show.bs.modal', function (e) {
					var rowid = $(e.relatedTarget).data('id');
					$.ajax({
							type : 'post',
							url : 'fetch_record.php', //Here you will fetch records
							data :  'rowid='+ rowid, //Pass $id
							success : function(data){
							$('.fetched-data').html(data);//Show fetched data from database
							}
					});
			});
	});
			</script>
	</html>