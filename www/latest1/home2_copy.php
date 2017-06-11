<!DOCTYPE html>
<html>
<head>
<title>CAFE ESTELA</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/home.css" type="text/css" />

<script src="css/jquery.min.js"></script>
<script src="css/bootstrap.min.js"></script>
<script src="css/css3.css"></script>
</head>
		<?php
		session_start ();
		$connect = mysqli_connect ( "localhost", "root", "", "test" );

		?>
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
				<h1 class="header">CAFE ESTELA</h1>
			</div>
			<div class="clearfix"></div>
		</div>

		<ul class="nav nav-tabs">
			<li><a href="home1.php">Drinks</a></li>
			<li class="active"><a data-toggle="tab" href="meals">Meals</a></li>
		</ul>

		<div class="row m-l">
			<div class="tab-content col-md-8 white-bg">
				<div id="meals" class="tab-pane fade in active">
						<?php
						$query = "SELECT * FROM tbl_meals ORDER BY id ASC";
						$result = mysqli_query ( $connect, $query );
						while ( $row = mysqli_fetch_array ( $result ) ) {
							?>
															<div class="col-sm-2 container-items"
						style="height: 130px;">
						<div class="items text-center">
							<h5 style="font-size: .85em;">
								<b><?php echo $row["name"]; ?></b>
							</h5>

							<div class="row">
								<div class="col-sm-12 bottom-align">
									<input type="radio" name="size" value="18oz" checked="checked" style="display: none" />
									<input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control text-center" value="1" />
									<input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />
									<input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />
									<input type="button" name="add_to_cart_12oz" id="<?php echo $row["id"]; ?>" style="padding: 3px;" class="btn btn-default form-control add_to_cart" value="Add to Cart" />
									<input type="hidden" name="add_to_cart_16o" id="<?php echo $row["id"]; ?>" style="margin-top: 6px; padding: 3px; width: 60px" class="btn btn-default form-control add_to_cart" value="16oz" />
								</div>
							</div>
						</div>
					</div>
											<?php
						}
						?>
					</div>
			</div>

			<div class="col-md-4 transaction-table">
				<table id="removerow"
					class="table table-bordered table-condensed white-bg text-center">
					<thead>
						<tr class="active">
							<th width="col-md-3">Product Name</th>
							<th width="col-md-1">Size</th>
							<th width="col-md-2">Quantity</th>
							<th width="col-md-2">Price</th>
							<th width="col-md-2">Total</th>
							<th width="col-md-2">Action</th>
						</tr>
					</thead>

						<?php
						if (! empty ( $_SESSION ["shopping_cart"] )) {
							$total = 0;
							foreach ( $_SESSION ["shopping_cart"] as $keys => $values ) {
								if ("")
									?>
										<tbody>
											<tr>
												<td><?php  echo $values["product_name"]; ?></td>
												<td></td>
												<td>
													<button
														class="minquant btn btn-default btn-xs custom-button-quant"
														id="<?php echo $values["product_id"];?>"
														name="<?php echo $values["product_size"] ?>">-</button>
																										<?php echo " " . $values["product_quantity"] . " "; ?>
																										<button name="<?php echo $values["product_size"]?>"
														class="addquant btn btn-default btn-xs custom-button-quant"
														id="<?php echo $values["product_id"];?>">+</button>
												</td>
												<td align="right"><?php  echo $values["product_price"]; ?></td>
												<td align="right"><?php  echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>
												<td>
													<button name="<?php echo $values["product_size"]?>"
														class="btn btn-danger btn-xs delete custom-button"
														id="<?php echo $values["product_id"]; ?>">Remove</button>
												</td>
											</tr>

						<?php
										$total = $total + ($values ["product_quantity"] * $values ["product_price"]);
							}
						?>

							<tr>
							<td colspan="3" class="text-right" style="text-align:right;">DISCOUNT</td>
							<td></td>
							<td></td>
							<td><button class="btn btn-warning btn-xs custom-button"
									data-toggle="" data-target="" type="submit">Add Discount</button></td>
						</tr>

						<tr>
							<td colspan="3" style="text-align: right !important;">Total</td>
							<td align="right"><?php echo number_format($total, 2); ?></td>
							<td></td>
							<td><button class="btn btn-success custom-button"
									data-toggle="modal" data-target="#modal-1" type="submit">Submit</button></td>
						</tr>
					</tbody>
					<?php
						}
					?>
				</table>
			</div>
		</div>
		<div id="id01" class="modal">
			<form class="modal-content animate" method="POST" action="home4.php"
				id="form1">

				<div class="imgcontainer"></div>

				<div class="container">
					<label><b>Input payment</b></label><br> <input type="number"
						placeholder="Enter Amount" name="amount" required="required" />
				</div>

				<div class="container" style="">
					<button type="button"
						onclick="document.getElementById('id01').style.display='none'"
						class="cancelbtn">Cancel</button>
					<a data-dismiss="modal" onclick="id02"><button type="button"
							class="cancelbtn">Proceed</button></a>
				</div>
			</form>
		</div>

		<div class="modal fade" id="modal-1" tabindex="-1" role="dialog"
			aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">

					<div class="modal-header bg-info">
						<h4 class="modal-title">
							<b>Input Payment</b>
						</h4>
					</div>

					<div class="modal-body p-b-0">
						<form method="post" action="">
							<input type="number" required="required"
								placeholder="Enter Amount" id="amount" name="amount"
								style="height: 50px;" />
							<p id="error" />

					</div>

					<div class="modal-footer">
						<input type="submit" class="btn btn-warning pull-lg-left"
							data-dismiss="modal" data-toggle="modal" data-target="#modal-2"
							onclick="k()" class="fa fa-unlock-alt" value="Proceed"
							name="submit"> <input type="submit"
							class="btn btn-warning pull-lg-left" class="fa fa-unlock-alt"
							value="Cancel" formnovalidate />
						</form>
					</div>
				</div>
			</div>
		</div>

		<!---------------------------------------- SECOND MODAL ---------------------------------------->
		<form action="sessiondestroy.php" method="post">
			<div class="modal fade" id="modal-2" tabindex="-1" role="dialog"
				aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">

						<div class="modal-header bg-warning">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Bill Confirmation</h4>
						</div>

						<div class="modal-body">
							<p id="demo1" />
							<p id="demo2" />
							<p id="demo3" />
							<script>
									function k(){
										var amount = document.getElementById("amount").value;
										var insufficient = "Insufficient amount";
										var none = "No amount entered";
										//window.location.href="home1.php?amount";
										var tot = <?php echo $total ?>;
										var change = amount - tot;

										if (amount > tot){
										document.getElementById('demo1').innerHTML =amount;
										document.getElementById('demo3').innerHTML = change;
										document.getElementById('demo2').innerHTML = tot;
										}
										else if(amount == ""){
											document.getElementById('demo1').innerHTML = none;
										}

										else if(amount < tot){
											document.getElementById('demo1').innerHTML = insufficient;
											document.getElementById('demo3').innerHTML = "";
											document.getElementById('demo2').innerHTML = "";

										}else{}
									}
								</script>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-info pull-lg-left"
								data-dismiss="modal" data-toggle="modal" data-target="#modal-1">
								<i class="fa fa-unlock-alt"></i>Back
							</button>
							<input type="submit" class="btn btn-warning pull-lg-left"
								name="Submit"
								onClick="return confirm('Are you sure you would like to submit this order?');" />
						</div>
					</div>
				</div>
			</div>
			<div class="row m-a-1" style="te t-align: center;"></div>
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
			var product_price = $('#price'+product_id).val();
			var product_price2 = $('#price2'+product_id).val();
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

							//alert(product_price);
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