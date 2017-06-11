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
				<li ><a href="adm.php">Stocks</a></li>
				<li class="active"><a data-toggle="tab" >Report</a></li>
				<li><a href="admprices.php">Prices</a></li>
				<li><a href="admacc.php">Account Management</a></li>
			</ul>

			<div class="clearfix"></div>	

			
				
				<div>
					<h1>REPORT</h1>
					
					<ul class="nav nav-pills nav-stacked col-xs-1">
						<li class="active"><a data-toggle="tab" href="#daily">Daily</a></li>
						<li><a data-toggle="tab" href="#weekly">Weekly</a></li>
					</ul>

					<div class="tab-content">
						<div id="daily" class="tab-pane fade in active">
							<h1>DAILY CONTENT</h1>
							<form action="admreports.php" method="GET">
							startdate<input type="date" name="startdate">
							enddate<input type="date" name="enddate">
							<input type="submit" value="search">
							</form>
							
							<table>
								<thead>
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
										<td><?php echo $row["total"]?></td>
									</tr>
									<?php
									}
								}

									?>
									
								</tbody>
								<thead>
									<tr>
									<th>Total:</th>
									<?php
										$sql="SELECT sum(total) FROM tbl_report_total WHERE date BETWEEN '2017-02-12' AND '2017-03-15'";
										if(isset($_GET["startdate"]) && isset($_GET["enddate"])){
											$a=$_GET["startdate"];
											$b=$_GET["enddate"];

											$sql = "SELECT sum(total) FROM tbl_report_total WHERE date BETWEEN '$a' AND '$b'";
											$result= mysqli_query($connect,$sql);
											while($row = $result->fetch_assoc()){?>
												<th><?php echo $row["sum(total)"]?></th>
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Summary of Order</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data">
                	
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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