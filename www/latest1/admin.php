<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin View</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="CSS/admin-css.css"  >
		<link href="CSS/bootstrap.min.css" rel="stylesheet">
		
		
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-sm-offset-11">Logout</div>
				<div class="col-sm-12"><h1>Cafe Estela</h1></div>
				<div class="clearfix"></div>
			</div>

			<ul class="nav nav-tabs navbar-right">
				<li class="active"><a data-toggle="tab" href="#stocks">Stocks</a></li>
				<li><a data-toggle="tab" href="#report">Report</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active">
					<?php
		session_start();
		$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT name, size FROM tbl_ingredients";
$result = mysqli_query($connect, $sql);


if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>		
    	<table border="1" width="100%">
        <thead>
        <tr>

        </tr>
        </thead>
        <tbody>
        <tr>
        <td class="col-sm-8"><?php echo $row["name"]; ?></td>
        <td><?php echo $row["size"]; ?></td>
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
	</body>
</html>