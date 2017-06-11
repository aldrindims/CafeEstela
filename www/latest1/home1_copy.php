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
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
?>
	<body>
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-1 col-sm-offset-11">
					<form action = "logout.php" >
						<button name="" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>
				<div class="col-sm-12"><h1 class="header">CAFE ESTELA</h1></div>
				<div class="clearfix"></div>
			</div>

					<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#products">Drinks</a></li>
				<li><a href="home2.php">Meals</a></li>
			</ul>


			<div class="row m-l">
				<div class="tab-content col-md-8 col-xs-12 white-bg">
					<div id="products" class="tab-pane fade in active">
						<?php
							$query = "SELECT * FROM tbl_product ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
						?>
								<div class="col-sm-2 col-xs-1 container-items">
									<div class="items text-center">
										<h5 style="font-size: .85em;"><b><?php echo $row["name"]; ?></b></h5>

										<div class="row">
											<div class="col-sm-12 bottom-align">
												<input type="radio" name="size" value="12oz" checked="checked"/>12oz<br>
												<input type="radio" name="size" value="16oz"/>16oz
												<input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control text-center" value="1" />
												<input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>"/>
												<input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>"/>
												<input type="hidden" name="hidden_price2" id="price2<?php echo $row["id"]; ?>" value="<?php echo $row["price2"]; ?>"/>
												<input type="button" name="add_to_cart_12oz" id="<?php echo $row["id"]; ?>" style="margin-top:0px; padding:3px;" class="btn btn-default form-control add_to_cart" value="Add to Cart" />
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

				<div class="col-md-4 col-xs-12 transaction-table">
					<table id="removerow" class="table table-bordered table-condensed white-bg text-center">
						<thead>
							<tr class="active">
								<th width="col-md-3">Product Name</th>
								<th width="col-md-1">Size</th>
								<th width="col-md-2">Quantity</th>
								<th width="col-md-2"> Price</th>
								<th width="col-md-2">Total</th>
								<th width="col-md-2">Action</th>
							</tr>
						</thead>
						<?php
							if(!empty($_SESSION["shopping_cart"])){
								$total = 0;
								$total1 = 0;
								$total2 = 0;
								$ctr = 0;
								foreach($_SESSION["shopping_cart"] as $keys => $values){
									if("")
						?>

										<tbody>
											<tr >
												<td><?php  echo $values["product_name"]; ?></td>
												<td><?php echo $values["product_size"];?></td>
												<td>
													<button class="minquant btn btn-default btn-xs custom-button-quant" id="<?php echo $values["product_id"];?>" name="<?php echo $values["product_size"] ?>">-</button>
													<?php  echo " " . $values["product_quantity"] . " "; ?>
													<button name="<?php echo $values["product_size"]?>" class="addquant btn btn-default btn-xs custom-button-quant" id="<?php echo $values["product_id"];?>">+</button>
												</td>
												<td align="right"><?php  echo $values["product_price"]; ?></td>
												<td align="right"><?php  echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
												<td><button name="<?php echo $values["product_size"]?>" class="btn btn-danger btn-xs delete custom-button" id="<?php echo $values["product_id"]; ?>">Remove</button></td>
											</tr>

										<?php

											$total = $total + ($values["product_quantity"] * $values["product_price"]);//eto problem
												if (isset($_POST['type'])){

													if($_POST["type"] == "group"){
														$total1 = $total1 + ($values["product_quantity"] * $values["product_price"]);
														$total = 	$total1 - ($total1 / $_POST["head"]);
													}elseif($_POST["type"] == "solo"){
														$total2 = $total2 + ($values["product_quantity"] * $values["product_price"]);
														$total = $total2 - ($total2 * .20);
													}elseif($_POST["type"] == "none"){
													$total = $total + ($values["product_quantity"] * $values["product_price"]);

													}else{
													}
												}
									}
										?>
						<tr>
							<td colspan="3" style="text-align:right;" class="text-right">DISCOUNT</td>
							<td>
								<?php
									if (isset($_POST['type'])){
										if($_POST["type"] == "solo"){
											echo "Solo";
										}elseif($_POST["type"] == "group"){
											echo "Group";
										}
									}
								?>
							</td>
							<td>
								<?php
									if (isset($_POST['type'])){
										if($_POST["type"] == "group"){
											echo $_POST['head'];
										}
									}

								?>
							</td>
							<td>
								<input type="submit" class="btn btn-warning btn-xs pull-md-left"  data-dismiss="modal" data-toggle="modal" data-target="#modal-3" class="fa fa-unlock-alt" value="Add Discount" name="submit">
							</td>
						</tr>

						<tr>
							<td colspan="3" style="text-align:right !important;">Total</td>
							<td align="right"><?php echo number_format($total, 2); ?></td>
							<td></td>
							<td><button class="btn btn-success custom-button" data-toggle="modal" data-target="#modal-1" type="submit">Submit</button></td>
						</tr>
							</tbody>
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
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<h4 class="modal-title">Bill Confirmation</h4>
								</div>
								<div class="modal-body">
									<p id ="demo1"></p>
									<p id="demo2"></p>
									<p id ="demo3"></p>
									<script>
										function k(){
											var amount = document.getElementById("amount").value;
											var insufficient = "Insufficient amount";
											var none = "No amount entered";
											var tot = <?php echo $total ?>;
											var change = amount - tot;

											if (amount > tot){
											document.getElementById('demo1').innerHTML =amount;
											document.getElementById('demo3').innerHTML = change;
											document.getElementById('demo2').innerHTML = tot;
											document.getElementById("submitbutton").disabled = false;
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
												document.getElementById('demo1').innerHTML =amount;
												document.getElementById('demo3').innerHTML = change;
												document.getElementById('demo2').innerHTML = tot;
												document.getElementById("submitbutton").disabled = false;
											}else{}
										}
									</script>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-info pull-lg-left" id="backbutton" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><i class="fa fa-unlock-alt"></i>Back</button>
									<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" id="submitbutton" onClick="return confirm('Are you sure you would like to submit this order?');"/>
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
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>

									<h4 class="modal-title">Senior Citizen</h4>
								</div>

							<div class="modal-body">
								<!--	<p id ="demo1"/>
									<p id="demo2"/>
									<p id ="demo3"/> -->
								<input type="radio" name="type" value="solo" onChange="findselected()"/>Solo<br>
								<input type="radio" name="type" value="group" onChange="findselected()" />Group<br>
								<input type="radio" name="type"  style="display:none" value="none" checked /><br>
								<input type="number" id="inputtext" disabled placeholder="Number of heads" name="head" required="required"/>

								<script>
									function findselected() {
										var result = document.querySelector('input[name="type"]:checked').value;
										if(result=="solo"){

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
									<input type="submit" class="btn btn-warning pull-lg-left" name="Submit" class="senior" id="submitbutton" onClick="return confirm('Are you sure you would like to submit this order?');"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row m-a-1" style="text-align: center;"></div>
				</form>
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
				alert("Please Enter Number of Quantity")
			}
		});

		$(document).on('click', '.delete', function(){
			location.reload(true);
			var product_id = $(this).attr("id");
			var product_size = $(this).attr("name");
			var action = "remove";
			//alert(product_size);
			//alert(product_id);

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