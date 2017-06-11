<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "test");
	//echo "Welcome, " . $_SESSION['user'];
/**
date_default_timezone_set("Asia/Hong_kong");
$time = date('h:i:s');
echo $time;

$mydate=getdate(date("U"));
echo "       $mydate[hours] $mydate[minutes] $mydate[seconds]";

if($mydate['hours'] == '22' && $mydate['minutes'] == '52'){

	include('script.php');

}
	**/

?>





<!DOCTYPE html>
<html>
		<head>
				<title>CAFE ESTELA</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="css/home.css" type="text/css" />

				<script src="css/jquery.min.js"></script>
				<script src="css/bootstrap.min.js"></script>
				<script src="css/css3.css"></script>
		</head>

		<body>
			<div class="container-fluid" style="padding-top: 10px;">

			<div class="row">
				<div class="col-sm-2 text-left">
					<?php
						echo "<span style='padding: 2px; background-color:rgba(255,255,255,0.5);'><b>Welcome, <span style='color:#ed0000;'>";

						$query1 = "SELECT user_temp FROM `tbl_report_total` WHERE 1";
							$results = mysqli_query($connect, $query1);
							$row = mysqli_fetch_array($results);

								echo $row["user_temp"];
								$_SESSION['employee'] = $row["user_temp"];"</span></b></span>";
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
					<div class="col-sm-12" style="margin-top: -1%"><h1 class="header"><img src="images/header.png" width="50%"></h1></div>
				</div>
				<div class="clearfix"></div>
			</div>

					<ul class="nav nav-tabs">
				<li ><a  href="home1.php">Hot</a></li>
				<li class="active"><a data-toggle="tab" href="Cold.php">Cold</a></li>
				<li ><a  href="frappe.php">Frappe</a></li>
				<li><a href="home2.php">Pasta</a></li>
				<li ><a  href="main.php">Main</a></li>
				<li><a  href="appetizer.php">Appetizer</a></li>
				<li ><a  href="sandwich.php">Sandwich</a></li>
				<li ><a  href="salad.php">Salad</a></li>
				<li ><a  href="pastry.php">Pastry</a></li>
				<li ><a  href="day.php">All Day</a></li>
				<li ><a href="smoothies.php">Smoothies</a></li>
				<li><a href="addons.php">Add-ons</a></li>
					</ul>


			<div class="row m-l">
				<div class="tab-content col-md-8 white-bg" style="overflow-y: auto; max-height: 530px; overflow-x: hidden;">
					<div id="products" class="tab-pane fade in active">
						<?php
							$query = "SELECT * FROM tbl_product where category = 'cold' ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result))
							{
						?>
														<div class="col-sm-2 container-items">
																<div class="items text-center">
																		<h5 style="font-size: 1em;"><b><?php echo $row["name"]; ?></b></h5>

														<div class="row">
															<div class="col-sm-12 bottom-align">
																		<label class="form-check-label"><span style="font-size: 1.5em;"><input type="radio" id="oz" name="size" value="12oz" checked />12oz</span></label><br>
												<label class="form-check-label"><span style="font-size: 1.5em;"><input type="radio" name="size" value="16oz"/>16oz</span></label>
																		<input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control text-center" value="1" />
												<input type="hidden" id="type" value="drink"/>
																		<input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>"/>
																		<input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>"/>
																		<input type="hidden" name="hidden_price2" id="price2<?php echo $row["id"]; ?>" value="<?php echo $row["price2"]; ?>"/>
																		<input type="button" name="add_to_cart_12oz" id="<?php echo $row["id"]; ?>" onclick = "al()" style="margin-top:0px; padding:3px;" class="btn btn-default form-control add_to_cart" value="Add to Cart" />
																		<input type="hidden" name="add_to_cart_16o" id="<?php echo $row["id"]; ?>" style="margin-top:6px; padding:3px; width: 60px" class="btn btn-default form-control add_to_cart" value="16oz" />
																		</div>
										</div>
																</div>
														</div>
										<?php
							}
						?>
					</div> <!--end product-->

				</div> <!-- end tab-content -->


					<div class="col-md-4 col-xs-12">
							<div class="transaction-table">
								<table id="removerow"
									class="table table-bordered table-condensed white-bg text-center">

							<thead>
								<tr class="active">
									<td colspan="6">
										<?php
											$connect->close();
											$connect = mysqli_connect("localhost", "root", "", "test");
											$query = "SELECT * FROM tbl_report";
											$result = mysqli_query($connect, $query);
											while($row = $result->fetch_assoc()) {
												$trans = $row["trans_no"]+1;
											$_SESSION['trans']	= $row['trans_no'];

											}
											echo "<span class='transaction-num'>Transaction Number: " . $trans . "</span>";
										?>
									</td>
								</tr>
								<tr class="active">
									<th class="col-md-3" style="vertical-align: middle;">Product Name</th>
									<th class="col-md-1" style="vertical-align: middle;">Size</th>
									<th class="col-md-2" style="vertical-align: middle;"`>Quantity</th>
									<th class="col-md-1" style="vertical-align: middle;"`>Price</th>
									<th class="col-md-2" style="vertical-align: middle;"`>Total</th>
									<th class="col-md-2" style="vertical-align: middle;">Action

									<form action = "clear.php" method="post" >
										<button class="btn btn-danger btn-xs" <?php if(empty($_SESSION["shopping_cart"])){ ?> disabled <?php   } ?> onClick="return confirm('Are you sure you want to clear?');">
											<img src="images/2.png" width="20"/>
										</button>



								</form>

										</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td colspan="6" style="padding: 0;">
										<div style="max-height: 30em; overflow-y: auto;">
											<table class="table table-bordered table-condensed white-bg text-center" style="margin: 0; width: 100%; font-size: 1em;">

																	<?php
												$_SESSION['tot'] = 0;

													if(!empty($_SESSION["shopping_cart"]))
													{
														$total = 0;
														$total1 = 0;
														$total2 = 0;
														foreach($_SESSION["shopping_cart"] as $keys => $values)
														{
															if("")
												?>
																<tr >
																	<font size="1em"><td class="col-md-3"><?php  echo $values["product_name"]; ?></td></font>
																	<td class="col-md-1" style="vertical-align: middle;"><?php
																	if($values["product_size"] !='18oz'){

																	echo $values["product_size"];
																	}
																	?></td>

																	<td class="col-md-2" style="vertical-align: middle;">
																		<button class="minquant btn btn-warning btn-sm custom-button-quant" id="<?php echo $values["product_id"];?>" name="<?php echo $values["product_size"] ?>">-</button>
																		<?php  echo " " . $values["product_quantity"] . " "; ?>
																		<button name="<?php echo $values["product_size"]?>" class="addquant btn btn-warning btn-sm custom-button-quant" id="<?php echo $values["product_id"];?>">+</button>
																	</td>
																	<td class="col-md-1" align="right" style="vertical-align: middle;"><?php  echo "&#8369;" . $values["product_price"]; ?></td>
																	<td class="col-md-2" align="right" style="vertical-align: middle;"><?php  echo "&#8369;" . number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
																	<td class="col-md-3" style="vertical-align: middle;"><button name="<?php echo $values["product_size"]?>" onclick = "disab()" class="btn btn-danger btn-sm delete custom-button" id="<?php echo $values["product_id"]; ?>">Remove</button></td>
																</tr>

																	<?php

																if(isset($_POST['type'])){
																		$_SESSION['type'] = $_POST['type'];
																}
																if(isset($_POST["head"])){
																	$_SESSION['head'] = $_POST["head"];
																}
																//put senior codes here
																//if($_POST["type"] == "none"){
																	//			$total = $total + ($values["product_quantity"] * $values["product_price"]);
																//}
																$total = $total + ($values["product_quantity"] * $values["product_price"]);//eto problem
																	if (isset($_SESSION['type'])){
																	if($_SESSION['type'] == "group"){
																		$total1 = $total1 + ($values["product_quantity"] * $values["product_price"]);
																		$total = 	$total1 - (($total1 / $_SESSION['head']) * .20);
																	}elseif($_SESSION['type'] == "solo"){
																		$total2 = $total2 + ($values["product_quantity"] * $values["product_price"]);
																		$total = $total2 - ($total2 * .20);
																	}
																	elseif($_SESSION['type'] == "special"){
																		$total3 = $total3 + ($values["product_quantity"] * $values["product_price"]);
																		$total = $total3 - ($total3 * .10);
																	}elseif($_SESSION['type'] == "none"){
																	$total;


																	}else{


																	}
																	}
													} // end foreach
													$_SESSION['tot'] = $total;
												?>
											</table>
										</div>
									</td>
								</tr>
							</tbody>

							<tfoot>
								<tr>

									<?php
										if(isset($_POST['type'])){
											$_SESSION['type'] = $_POST['type'];
										}
									?>

									<td colspan="3" style="text-align:right; vertical-align: middle;" class="text-right" >DISCOUNT</td>
									<td style="vertical-align: middle;">
										<?php
											if (isset($_SESSION['type'])){
												if($_SESSION['type'] == "solo"){
													echo "Solo";
												}elseif($_SESSION['type'] == "group"){
													echo "Group";
												}
											}
										?>
									</td>
									<td style="vertical-align: middle;">
										<?php
											if (isset($_SESSION['type'])){
												if($_SESSION['type'] == "group"){
													echo $_SESSION['head'];
												}
											}
										?>
									</td>
									<td style="vertical-align: middle;"><input type="submit" class="btn btn-warning btn-sm pull-lg-left"  data-dismiss="modal" data-toggle="modal" data-target="#modal-3" class="fa fa-unlock-alt" value="Add Discount" name="submit"></td>
								</tr>

														<tr>
																<td colspan="3" style="text-align:right !important; vertical-align: middle;">Total</td>
																<td align="right" style="vertical-align: middle;"><?php echo "&#8369;" .  number_format($_SESSION['tot'], 2); ?></td>
																<td></td>
									<td style="vertical-align: middle;"><button class="btn btn-success custom-button" data-toggle="modal" data-target="#modal-1" type="submit" >Submit</button></td>
														</tr>

							</tfoot>
											<?php
								}
							?>
								</table>
						</div> <!-- end col ng table -->
					</div>

					<div id="id01" class="modal">

					<form class="modal-content animate" method="POST" action="home4.php" id="form1">
					<div class="imgcontainer"></div>

						<div class="container">
						<label><b>Input payment</b></label><br>
							<input type="number" placeholder="Enter Amount" name="amount" required="required"/>
						</div>

					<div class="container" style="">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						<a data-dismiss="modal" onclick="id02"><button type="button" class="cancelbtn">Proceed</button></a>

				</form>
					</div>
			</div>

			<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">

							<div class="modal-header bg-info">
									<h4 class="modal-title"><b/>Input Payment</h4>
							</div>

							<div class="modal-body p-b-0">
							<form method="post" action="">
								<input type="number" required="required" placeholder="Enter Amount" id="amount" name="amount" style="height:50px;"/>
								<p id="error"/></p>

							</div>

							<div class="modal-footer">
							<input type="submit" class="btn btn-warning pull-lg-left" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" onclick="k()"class="fa fa-unlock-alt" value="Proceed" name="submit">
							<input type="submit" class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt" value="Cancel" data-dismiss="modal" aria-label="Close"/>

							</form>
						</div>
						</div>
				</div>
				</div>
				<!---------------------------------------- SECOND MODAL ---------------------------------------->
				<form action="sessiondestroy.php" method="post">
					<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header bg-warning">


										<h4 class="modal-title">Bill Confirmation</h4>
								</div>
								<div class="modal-body">
									<table>
									<tr>
										<td><p id="p3"/></td>
										<td><label id="demo2"/></td>
									</tr>

									<tr>
										<td><p id="p1"/></td>
										<td><label id ="demo1"/> </td>
									</tr>
									<tr>
										<td><hr></td>
										<td><hr></td>
									</tr>

									<tr>
										<td><p id="p2"/></td>
										<td><label id ="demo3"/></td>
									</tr>


								</table>



								<script>

									function k(){
										var amount = document.getElementById("amount").value;
										var amt = "&#8369;" + amount;
										var insufficient = "Insufficient amount";
										var none = "No amount entered";
										var tot = <?php echo $total ?>;
										var tot1 = "&#8369;" + tot.toFixed(2);
										var change1 = amount - tot;
										var change = "&#8369;" + change1.toFixed(2);

										var string1 = "Payment : ";
										var string2 = "Total Bill : ";
										var string3 = "Change : ";

										if (amount > tot){
											document.getElementById('demo1').innerHTML =amt;
											document.getElementById('demo3').innerHTML = change;
											document.getElementById('demo2').innerHTML = tot1;
											document.getElementById("submitbutton").disabled = false;

											document.getElementById('p1').innerHTML = string1;
											document.getElementById('p2').innerHTML = string3;
											document.getElementById('p3').innerHTML = string2;
										}
										else if(amount == ""){
											document.getElementById('demo1').innerHTML = none;
											document.getElementById("submitbutton").disabled = true;
										}
										else if(amount < tot){
											document.getElementById('demo1').innerHTML = insufficient;
											document.getElementById('demo3').innerHTML = "";
											document.getElementById('demo2').innerHTML = "";
											document.getElementById("submitbutton").disabled = true;
										}else if(amount == tot){
											document.getElementById('demo1').innerHTML =amt;
											document.getElementById('demo3').innerHTML = change;
											document.getElementById('demo2').innerHTML = tot1;
											document.getElementById("submitbutton").disabled = false;

											document.getElementById('p1').innerHTML = string1;
											document.getElementById('p2').innerHTML = string3;
											document.getElementById('p3').innerHTML = string2
										}else{}
									}
								</script>
								</div>

									<div class="modal-footer">

								<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" id="submitbutton" onClick="return confirm('Are you sure you would like to submit this order?'); al();"/>
								<button type="button" class="btn btn-info pull-lg-left" id="backbutton" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><i class="fa fa-unlock-alt"></i>Back</button>
									</div>
							</div>
					</div>
					</div>
				<div class="row m-a-1" style="text-align: center;"></div>
			</form>

			<!---------------------------------------- THIRD MODAL ---------------------------------------->
				<form action="" method="post">
					<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-sm" role="document">
							<div class="modal-content">
								<div class="modal-header bg-warning">
										<h4 class="modal-title">Senior Citizen</h4>
								</div>
							<div class="modal-body">
							<!--	<p id ="demo1"/>
								<p id="demo2"/>
								<p id ="demo3"/> -->
								<input type="radio" name="type" value="solo" required="required" checked onChange="findselected()"/>Senior - Solo<br>
								<input type="radio" name="type" value="group" onChange="findselected()" />Senior - Group<br>
								<input type="radio" name="type" value="special" onChange="findselected()" />Special 10% Discount<br>
							<input type="radio" name="type"  style="display:none" value="none"  /><br>
							<input type="number" id="inputtext" disabled placeholder="Number of heads" name="head" required="required"/>

							<script>
							function findselected() {
							var result = document.querySelector('input[name="type"]:checked').value;
							if(result=="solo"){

							document.getElementById("inputtext").setAttribute('disabled', true);
							}
							else if (result=="special"){
								document.getElementById("inputtext").setAttribute('disabled', true);
							}
							else{
							document.getElementById("inputtext").removeAttribute('disabled');
							}
						}

							</script>

								</div>

									<div class="modal-footer">
								<!-- <button type="button" class="btn btn-info pull-lg-left" id="backbutton" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><i class="fa fa-unlock-alt"></i>Back</button> -->
								<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" class="senior" id="submitbutton" onClick="return confirm('Are you sure you want to add discount?'); al();"/>
								<input type="submit" class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt" value="Cancel" data-dismiss="modal" aria-label="Close"/>
									</div>
							</div>
					</div>
					</div>
				<div class="row m-a-1" style="text-align: center;"></div>
			</form>
			<?php

$connect = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT * from tbl_ingredients";
$result = mysqli_query($connect, $query);
$_SESSION['bool'] = false;
while($row = $result->fetch_assoc()) {


$size = $row['MaxSize'];


	$row['id'];
	$row['name'];
	$size = $row['MaxSize'];

	$sizes = $row['size'];
	$name = $row['name'];


	if ($row['name'] = 'Coffee Bean' && $row['size'] <= $size * .05 ){
		echo "<script>

		function al(){

		alert('Restock $name now, all of the products are not available');

		}
		</script>";

		$_SESSION['bool'] = true;

	}elseif ($row['name'] != 'Coffee Bean' && $row['size'] == 10000 && $row['size'] <= $size * .15 ){
		echo "<script>
		function al(){
		alert('Restock $name now');
		}

		</script>";

		$_SESSION['bool'] = true;

	}else if ($row['size'] <= $size * .50 ){

		$_SESSION['message'] = $name . ' is under 50%';

		echo "<script>
		function al(){
		alert('$name is under 50%');
		}

		</script>";
	}


	}




?>



		</div>
		</body>
</html>

<script>
	$(document).ready(function(data){

		$('.add_to_cart').click(function(){
			location.reload(true);
			var product_id = $(this).attr("id");
			var product_name = $('#name'+product_id).val();
			var product_price = $('#price2'+product_id).val();
			var product_price2 = $('#price'+product_id).val();
			var product_size = $("input[name=size]:radio:checked").val();
			var product_quantity = $('#quantity'+product_id).val();
			var action = "addtocart";
			var type= "drink";
			if(product_quantity > 0)
			{
				$.ajax({
					url:"action.php",
					method:"POST",
					dataType:"json",
					data:{
						product_id:product_id,
						product_name:product_name,
						product_price:product_price,
						product_price2:product_price2,
						product_size:product_size,
						product_quantity:product_quantity,
						type:type,
						// size_12oz:size_12oz,
						// size_16oz:size_16oz,
						// size:size
						// product_size:product_size,
						action:action
					},
					success:function(data)
					{
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);

							//alert(product_size);
					}
				});
			}
			else
			{
				alert("Please enter a valid number")
			}
		});

		$(document).on('click', '.delete', function(){
			location.reload(true);
			var product_id = $(this).attr("id");
			var product_size = $(this).attr("name");
			var action = "remove";
			//alert(product_size);
			//alert(product_id);
			if(confirm("Are you sure you want to remove the item?")){
				$.ajax({
					url:"action.php",
					method:"POST",
					dataType:"json",
					data:{product_id:product_id, product_size:product_size, action:action},
					success:function(data){
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
					}

				});
			}

		});
		/**$(document).on('click', '.senior', function(){
			location.reload(true);
			var seniorcitizen = $("input[name=type]:radio:checked").val();
			var action = "remove";
			//alert(product_size);
			//alert(product_id);

				$.ajax({
					url:"home1.php",
					method:"POST",
					dataType:"json",
					data:{seniorcitizen:seniorcitizen, action:action},
					success:function(data){
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
					}

				});

		});//SENIOR CITIZEN **/

		$(document).on('click', '.addquant', function(){
			location.reload(true);
			var product_id = $(this).attr("id");
			var product_size = $(this).attr("name");
			var action = "addquant";
				$.ajax({
					url:"action.php",
					method:"POST",
					dataType:"json",
					data:{product_id:product_id, product_size:product_size,  action:action},
					success:function(data){
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
					}

				});
		});

		$(document).on('click', '.minquant', function(){
			location.reload(true);
			var product_id = $(this).attr("id");
			var product_size = $(this).attr("name");
			var action = "minquant";
				$.ajax({
					url:"action.php",
					method:"POST",
					dataType:"json",
					data:{product_id:product_id, product_size:product_size, action:action},
					success:function(data){
						$('#order_table').html(data.order_table);
						$('.badge').text(data.cart_item);
					}

				});
		});
	});

	$(document).ready(function(data){

		$('.rowremove').click(function(){
			alert("Are you sure?");
			window.location = 'http://localhost/mySys/home4.php';
		});

	});


</script>
