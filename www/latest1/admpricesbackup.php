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
				<li class="active"><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
			</ul>

			<div class="clearfix"></div>

			<div class="tab-content white-bg">								
			
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
			
				<div id="prices" class="tab-pane fade in active"><!-------- Prices -------->
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
    	<table border="1" width="100%">
        <thead>
        <tr>

        </tr>
        </thead>
        <tbody>
        <tr>		
        <td class="col-sm-8"><?php echo $row["name"]; ?></td>
        <td><?php echo "<form action = 'restock1.php' method=post>"; 
		//echo $row['size'];
		echo $row['price'];
		echo "<input type=text value='".$row['price']."' name=p1 />";  
		echo $row['price2'];
		echo "<input type=text value='".$row['price2']."' name=p2 />";  
		echo "<input type=hidden name=id value='".$row['id']."'/>";				
		echo "<input type=hidden name=price onclick=alert() value='".$row['price']."'/>"; //TANGGALIN ITO
		echo "<input type=hidden name=price2 onclick=alert() value='".$row['price2']."'/>"; //TANGGALIN ITO
		echo "<input type=submit value=Restock  />";
		echo "</form>";
				
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