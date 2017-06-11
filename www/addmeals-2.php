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
				<h1 class="header">Cafe Estela</h1>
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
					<li><a href="addingr.php">Add New Ingredient</a></li>
					<li class="active"><a data-toggle="tab" href="#newmeals">Add New Meals</a></li>
					<li><a href="deleteprod.php">Delete Product</a></li>
					<li><a href="deletemeal.php">Delete Meal</a></li>
				</ul>

				<div class="tab-content white-bg col-md-10">




					<div id="newmeals" class="tab-pane fade in active">
						<div class="row center-block" style="width: 100%;">
							<div class="col-sm-8" style="margin: 0 auto; float: none;">
								<div class="panel panel-default">
									<div class="panel-heading">
										<div class="panel-title">Add New Meal</div>
									</div>

									<div class="panel-body">
										<div class="col-md-10 center-block form-group" style="background-color:white; width:100%;">
											<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_DEPRECATED);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	  $connect = mysqli_connect($servername, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD']=='POST'){

	$product = $_POST['product'];
	$price = $_POST['price'];

	$query = mysqli_query($connect, "SELECT * FROM tbl_meals WHERE name ='$product'");
	if(mysqli_num_rows($query) > 0){
		echo "There is already a product with that name";
	}else{


	$sql = "INSERT INTO tbl_meals (name, price, size, size2) VALUES ('$product', '$price', '1', '500')";
    if (mysqli_query($connect, $sql)) {
        $sql = "SELECT id FROM tbl_meals WHERE name = '$product'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $prodid =  $row["id"];
            $sql = "INSERT INTO tbl_meals_ingr (meal_id) VALUES ('$prodid')";
                if (mysqli_query($connect, $sql)) {
                	$ingr1id = $_POST['boxes1'];
                	$ingrm1 = ((empty($_POST['box1'])) || $_POST['box1'] == "") ? 0 : $_POST['box1'];
                	
                	$sql = "UPDATE tbl_meals_ingr SET ingr1_id = $ingr1id, ingrm1 = $ingrm1 WHERE meal_id = $prodid";
                	if(mysqli_query($connect, $sql)){
                		$ingr2id = $_POST['boxes2'];
	                	$ingrm2 = ((empty($_POST['box2'])) || $_POST['box2'] == "") ? 0 : $_POST['box2'];
	                	
	                	$sql = "UPDATE tbl_meals_ingr SET ingr2_id = $ingr2id, ingrm2 = $ingrm2 WHERE meal_id = $prodid";
	                	if(mysqli_query($connect, $sql)){
	                		$ingr3id = $_POST['boxes3'];
		                	$ingrm3 = ((empty($_POST['box3'])) || $_POST['box3'] == "") ? 0 : $_POST['box3'];
		                	
		                	$sql = "UPDATE tbl_meals_ingr SET ingr3_id = $ingr3id, ingrm3 = $ingrm3 WHERE meal_id = $prodid";
		                	if(mysqli_query($connect, $sql)){
		                		$ingr4id = $_POST['boxes4'];
			                	$ingrm4 = ((empty($_POST['box4'])) || $_POST['box4'] == "") ? 0 : $_POST['box4'];
			                	
			                	$sql = "UPDATE tbl_meals_ingr SET ingr4_id = $ingr4id, ingrm4 = $ingrm4 WHERE meal_id = $prodid";
			                	if(mysqli_query($connect, $sql)){
			                		$ingr5id = $_POST['boxes5'];
				                	$ingrm5 = ((empty($_POST['box5'])) || $_POST['box5'] == "") ? 0 : $_POST['box5'];
				                	
				                	$sql = "UPDATE tbl_meals_ingr SET ingr5_id = $ingr5id, ingrm5 = $ingrm5 WHERE meal_id = $prodid";
				                	if(mysqli_query($connect, $sql)){
				                		$ingr6id = $_POST['boxes6'];
					                	$ingrm6 = ((empty($_POST['box6'])) || $_POST['box6'] == "") ? 0 : $_POST['box6'];
					                	
					                	$sql = "UPDATE tbl_meals_ingr SET ingr6_id = $ingr6id, ingrm6 = $ingrm6 WHERE meal_id = $prodid";
					                	if(mysqli_query($connect, $sql)){
					                		$ingr7id = $_POST['boxes7'];
						                	$ingrm7 = ((empty($_POST['box7'])) || $_POST['box7'] == "") ? 0 : $_POST['box7'];
						                	
						                	$sql = "UPDATE tbl_meals_ingr SET ingr7_id = $ingr7id, ingrm7 = $ingrm7 WHERE meal_id = $prodid";
						                	if(mysqli_query($connect, $sql)){
						                		$ingr8id = $_POST['boxes8'];
							                	$ingrm8 = ((empty($_POST['box8'])) || $_POST['box8'] == "") ? 0 : $_POST['box8'];
							                	
							                	$sql = "UPDATE tbl_meals_ingr SET ingr8_id = $ingr8id, ingrm8 = $ingrm8 WHERE meal_id = $prodid";
							                	if(mysqli_query($connect, $sql)){
							                		$ingr9id = $_POST['boxes9'];
								                	$ingrm9 = ((empty($_POST['box9'])) || $_POST['box9'] == "") ? 0 : $_POST['box9'];
								                	
								                	$sql = "UPDATE tbl_meals_ingr SET ingr9_id = $ingr9id, ingrm9 = $ingrm9 WHERE meal_id = $prodid";
								                	if(mysqli_query($connect, $sql)){
								                		$ingr10id = $_POST['boxes10'];
									                	$ingrm10 = ((empty($_POST['box10'])) || $_POST['box10'] == "") ? 0 : $_POST['box10'];
									                	
									                	$sql = "UPDATE tbl_meals_ingr SET ingr10_id = $ingr10id, ingrm10 = $ingrm10 WHERE meal_id = $prodid";
									                	if(mysqli_query($connect, $sql)){
									                		$ingr11id = $_POST['boxes11'];
										                	$ingrm11 = ((empty($_POST['box11'])) || $_POST['box11'] == "") ? 0 : $_POST['box11'];
										                	
										                	$sql = "UPDATE tbl_meals_ingr SET ingr11_id = $ingr11id, ingrm11 = $ingrm11 WHERE meal_id = $prodid";
										                	if(mysqli_query($connect, $sql)){
										                		$ingr12id = $_POST['boxes12'];
											                	$ingrm12 = ((empty($_POST['box12'])) || $_POST['box12'] == "") ? 0 : $_POST['box12'];
											                	
											                	$sql = "UPDATE tbl_meals_ingr SET ingr12_id = $ingr12id, ingrm12 = $ingrm12 WHERE meal_id = $prodid";
											                	if(mysqli_query($connect, $sql)){
											                		echo "Success";
											                	}else{
											                		echo "Error12: <br>" . mysqli_error($connect);
											                	}
										                	}else{
										                		echo "Error11: <br>" . mysqli_error($connect);
										                	}									                	
										                }else{
									                		echo "Error10: <br>" . mysqli_error($connect);
									                	}
								                	}else{
								                		echo "Error9: <br>" . mysqli_error($connect);
								                	}
							                	}else{
							                		echo "Error8: <br>" . mysqli_error($connect);
							                	}
						                	}else{
						                		echo "Error7: <br>" . mysqli_error($connect);
						                	}
					                	
					                	}else{
					                		echo "Error6: <br>" . mysqli_error($connect);
					                	}
				                	
				                	}else{
				                		echo "Error5: <br>" . mysqli_error($connect);
				                	}
			                	
			                	}else{
			                		echo "Error4: <br>" . mysqli_error($connect);
			                	}
		                	}else{
		                		echo "Error3: <br>" . mysqli_error($connect);
		                	}
	                	}else{
	                		echo "Error2: <br>" . mysqli_error($connect);
	                	}
                	}else{
                		echo "Error1: <br>" . mysqli_error($connect);
                	}
                }else{
                	echo "Error";
                }
            }
        }else{
        	echo "0results";
        }
    }else{
    	echo "Error add";
    }
}
}	
	  	
?>

  		<script type="text/javascript">
            function show1() {
                document.getElementById("dThreshold1").style.display = "block";
            }
            function show2() {
                document.getElementById("dThreshold2").style.display = "block";
            }
            function show3() {
                var x = document.getElementById('dThreshold3');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show4() {
                var x = document.getElementById('dThreshold4');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show5() {
                var x = document.getElementById('dThreshold5');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show6() {
                var x = document.getElementById('dThreshold6');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show7() {
                var x = document.getElementById('dThreshold7');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show8() {
                var x = document.getElementById('dThreshold8');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show9() {
                var x = document.getElementById('dThreshold9');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show10() {
                var x = document.getElementById('dThreshold10');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show11() {
                var x = document.getElementById('dThreshold11');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function show12() {
                var x = document.getElementById('dThreshold12');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide2() {
                var x = document.getElementById('dThreshold2');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide3() {
                var x = document.getElementById('dThreshold3');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide4() {
                var x = document.getElementById('dThreshold4');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide5() {
                var x = document.getElementById('dThreshold5');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide6() {
                var x = document.getElementById('dThreshold6');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide7() {
                var x = document.getElementById('dThreshold7');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide9() {
                var x = document.getElementById('dThreshold9');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide10() {
                var x = document.getElementById('dThreshold10');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide11() {
                var x = document.getElementById('dThreshold11');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide12() {
                var x = document.getElementById('dThreshold12');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
            function hide8() {
                var x = document.getElementById('dThreshold8');
			    if (x.style.display === 'none') {
			        x.style.display = 'block';
			    } else {
			        x.style.display = 'none';
			    }
            }
        </script>


											<form method="POST" action="">
												<div class="form-group col-md-12">
													<label for="product" class="col-md-1 control-label text-right">Product Name</label>
													<div class="col-md-11">
														<input type="text" name="product" placeholder="Product" class="form-control"/>
													</div>
												</div>

												<div class="form-group col-md-12">
													<label for="price" class="col-md-1 control-label text-right">Price</label>
													<span class="col-md-11 input-group">
														<input type="number" name="price" placeholder="Price"  minimum="0" class="form-control"/>
													</span>
												</div>

												<div class="form-group col-md-7">
													<label for="boxes1" class="col-md-3 control-label text-right">Ingredients</label>
													<span class="col-md-9 input-group">
														<select name="boxes1" class="form-control">
															<option selected value="NULL">SELECT INGREDIENT</option>
															<?php
																$sql = "SELECT * FROM tbl_ingredients";
																$result = mysqli_query($connect, $sql);
																while($row = $result->fetch_assoc()) {
																	$user = $row["name"];
																	$id = $row["id"];
																	echo "<option value=" . $id .">" . $user ."</option>";
																}
															?>
														</select> 
													</span>
												</div>

												<div class="form-group col-md-4">
													<span class="col-md-12 input-group">
														<span class="input-group-addon" id="sizing-addon1">Quantity</span>
														<input type="number"" name="box1" placeholder="Subtracted qty1" minimum="0" class="form-control"/>
													</span>
												</div>

												<div class="form-group col-md-1">
													<span class="col-md-12 input-group">
														<input type="button" onclick="show2();" value="+" class="btn btn-success" style="padding: 4px; margin-left:-3em;"/>
													</span>
												</div>

												<div id="dThreshold2" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes2" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																<?php
																	$sql = "SELECT * FROM tbl_ingredients";
																	$result = mysqli_query($connect, $sql);
																	while($row = $result->fetch_assoc()) {
																		$user = $row["name"];
																		$id = $row["id"];
																		echo "<option value=" . $id .">" . $user ."</option>";
																	}
																?>
															</select> 
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box2" placeholder="Subtracted qty2" class="form-control"/>
														</span>
													</div>

													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show3();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />&nbsp;
																<input type="button" onclick="hide2();" value="-" class="btn btn-warning" style="padding: 4px 7px; " />
															</span>
													</div>
												</div>

												<div id="dThreshold3" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes3" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box3" placeholder="Subtracted qty3" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show4();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide3();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold4" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes4" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box4" placeholder="Subtracted qty4" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show5();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide4();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold5" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes5" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box5" placeholder="Subtracted qty5" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show6();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide5();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold6" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes6" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box6" placeholder="Subtracted qty6" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show7();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide6();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold7" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes7" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box7" placeholder="Subtracted qty7" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show8();" value="+" class="btn btn-success" style="padding: 4px;"/>
																&nbsp;<input type="button" onclick="hide7();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold8" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes8" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box8" placeholder="Subtracted qty8" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show9();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide8();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold9" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes9" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box9" placeholder="Subtracted qty9" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show10();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide9();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold10" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes10" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box10" placeholder="Subtracted qty11" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show11();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide10();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold11" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes11" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box11" placeholder="Subtracted qty11" minimum="0" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="show12();" value="+" class="btn btn-success" style="padding: 4px; margin-left: -2em;" />
																&nbsp;<input type="button" onclick="hide11();" value="-" class="btn btn-warning" style="padding: 4px 6px;" />
															</span>
													</div>
												</div>

												<div id="dThreshold12" style="display: none">
													<div class="form-group col-md-7">
														<span class="col-md-9 col-md-offset-3 input-group">
															<select name="boxes12" class="form-control">
																<option selected value="NULL">SELECT INGREDIENT</option>
																	<?php
																		$sql = "SELECT * FROM tbl_ingredients";
																		$result = mysqli_query($connect, $sql);
																		while($row = $result->fetch_assoc()) {
																			$user = $row["name"];
																			$id = $row["id"];
																			echo "<option value=" . $id .">" . $user ."</option>";
																		}
																	?>
															</select>
														</span>
													</div>

													<div class="form-group col-md-4">
														<span class="col-md-12 input-group">
															<span class="input-group-addon" id="sizing-addon1">Quantity</span>
															<input type="number"" name="box12" placeholder="Subtracted qty12" minimum="0" class="form-control"/>
														</span>
													</div>


													<div class="form-group col-md-1">
															<span class="col-md-12 input-group">
																<input type="button" onclick="hide12();" value="-" class="btn btn-warning" style="padding: 4px 6px; margin-left: -3em;" />
															</span>
													</div>
												</div>
												<div class="form-group">
												<input type="submit" name="addproduct" value="Add Product" class="btn btn-md btn-success"/>
												</div>
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




