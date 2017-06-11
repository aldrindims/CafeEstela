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
				<li><a href="admacc.php">Account Management</a></li>
				<li class="active"><a href="addprodingr.php">Add Products</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">
				<div id="stocks" class="tab-pane fade in active" style="height: 500px; overflow-y: auto; margin:0 0 0 15px; ">					
					
					<ul class="nav nav-pills nav-stacked col-md-2">
						<li><a href="addprodingr.php">Add New Product</a></li>
						<li class="active"><a data-toggle="tab" href="#newmeals">Add New Ingredient</a></li>
						<li><a href="addmeals.php">Add New Meals</a></li>
					</ul>

					<div class="tab-content white-bg col-md-10">
						

						
						
<div id="newmeals" class="tab-pane fade in active">
	<div class="row center-block" style="width: 100%;">
		<div class="col-sm-8" style="margin: 0 auto; float: none;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">Add New Ingredient</div>
				</div>

				<div class="panel-body">
					<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
<?php
												error_reporting(E_ALL ^ E_DEPRECATED);
												$servername = "localhost";
												$username = "root";
												$password = "";
												$dbname = "test";
												$connect = mysqli_connect($servername, $username, $password, $dbname);

												if(isset($_POST['name']) && isset($_POST['size']) && isset($_POST['max'])){

												$name = $_POST['name'];
												$size = $_POST['size'];
												$max = $_POST['max'];
												$sql = "INSERT INTO tbl_ingredients (name, size, MaxSize) VALUES ('$name', '$size', '$max')";
												    if (mysqli_query($connect, $sql)) {
												    	echo "<div class='alert alert-success'>";
														echo "<p>Success</p>";
														echo "</div>";
												    }else{
												    	echo "<div class='alert alert-danger'>";
														echo "<p>Error</p>";
														echo "</div>";
												    }
												}
											?>
<form method="POST" class="form-horizontal" role="form">

	<div class="form-group">
		<label for="product" class="col-md-2 control-label text-right">Ingredient</label>
		<div class="col-md-10">
			<input type="text" name="name" placeholder="ingredient" class="form-control"/>
		</div>
	</div>

	<div class="form-group">
		<label for="product" class="col-md-2 control-label text-right">Size</label>
		<div class="col-md-10">
			<input type="number" name="size" placeholder="size" class="form-control"/>
		</div>
	</div>

	<div class="form-group">
		<label for="product" class="col-md-2 control-label text-right">Max quantity</label>
		<div class="col-md-10">
			<input type="number" name="max" placeholder="max quantity" class="form-control"/>
		</div>
	</div>

	<input type="submit" value="Add" class="btn btn-md btn-success">
</form>
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








