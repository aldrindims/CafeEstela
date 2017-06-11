<?php
//action.php
$is_available = 0;
session_start();
$connect = mysqli_connect("localhost", "root", "", "test");
$ing1 = 0;
$ing2 = 0;
$ing3 = 0;
$ing4 = 0;
$ing5 = 0;
$ing6 = 0;
$ing7 = 0;









if(isset($_POST["product_id"]))
{
	$order_table = '';
	$message = '';
	if($_POST["action"] == "addtocart")
	{
		//if($allow == 0){
		if(!$_SESSION['bool']){
		if($_POST["product_size"] == "16oz" && $ing1 == 0 && $ing2 == 0 && $ing3 == 0
		&& $ing4 == 0 && $ing5 == 0 && $ing6 == 0 && $ing7 == 0) //lalagyan ko ng != kapag kulang stock
			{

		if(isset($_SESSION["shopping_cart"]))
		{

			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"] && $_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["product_size"] )
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}

			if($is_available < 1)
			{
				$item_array = array(
					'product_id'			=>	$_POST["product_id"],
					'product_name'			=>	$_POST["product_name"],
					'product_size'			=>  $_POST["product_size"],
					'product_size2'			=>  $_POST["product_size"],
					'product_price'			=>	$_POST["product_price"],
					'product_quantity'		=>	$_POST["product_quantity"],
					'product_type'			=>  $_POST["type"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'			=>	$_POST["product_id"],
				'product_name'			=>	$_POST["product_name"],
				'product_size'			=>  $_POST["product_size"],
				'product_size2'			=>  $_POST["product_size"],
				'product_price'			=>	$_POST["product_price"],
				'product_quantity'		=>	$_POST["product_quantity"],
				'product_type'			=>  $_POST["type"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}elseif ($_POST["product_size"] == "12oz" && $ing1 == 0 && $ing2 == 0 && $ing3 == 0
		&& $ing4 == 0 && $ing5 == 0 && $ing6 == 0 && $ing7 == 0)
			{

		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"] && $_POST["product_id"] && $_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["product_size"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}
			if($is_available < 1)
			{
				$item_array = array(
					'product_id'			=>	$_POST["product_id"],
					'product_name'			=>	$_POST["product_name"],
					'product_size'			=>  $_POST["product_size"],
					'product_price'			=>	$_POST["product_price2"],
					'product_quantity'		=>	$_POST["product_quantity"],
					'product_type'			=>  $_POST["type"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'			=>	$_POST["product_id"],
				'product_name'			=>	$_POST["product_name"],
				'product_size'			=>  $_POST["product_size"],
				'product_price'			=>	$_POST["product_price2"],
				'product_quantity'		=>	$_POST["product_quantity"],
				'product_type'			=>  $_POST["type"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}
	elseif ($_POST["product_size"] == "18oz" && $allow == 0)
			{

		if(isset($_SESSION["shopping_cart"]))
		{
			$is_available = 0;
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"] && $_POST["product_id"] && $_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["product_size"])
				{
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
				}
			}
			if($is_available < 1)
			{
				$item_array = array(
					'product_id'			=>	$_POST["product_id"],
					'product_name'			=>	$_POST["product_name"],
					'product_size'			=>  $_POST["product_size"],
					'product_price'			=>	$_POST["product_price"],
					'product_quantity'		=>	$_POST["product_quantity"],
					'product_type'			=>  $_POST["type"]
				);
				$_SESSION["shopping_cart"][] = $item_array;
			}
		}
		else
		{
			$item_array = array(
				'product_id'			=>	$_POST["product_id"],
				'product_name'			=>	$_POST["product_name"],
				'product_size'			=>  $_POST["product_size"],
				'product_price'			=>	$_POST["product_price2"],
				'product_quantity'		=>	$_POST["product_quantity"],
				'product_type'			=>  $_POST["type"]
			);
			$_SESSION["shopping_cart"][] = $item_array;
		}
	}
}//end cart
//}

	if($_POST["action"] == "remove")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["product_id"] == $_POST["product_id"] && $values["product_size"] == $_POST["product_size"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				$message = '<label class="text-success">Product Removed</label>';

			}
		}
	}

	if($_POST["action"] == "addquant"){
		foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"] && $_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["product_size"])
				{
					if($values["product_quantity"] > 0){
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + 1;
					}

				}
			}
	}

	if($_POST["action"] == "minquant"){
		foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($_SESSION["shopping_cart"][$keys]['product_id'] == $_POST["product_id"] && $_SESSION["shopping_cart"][$keys]['product_size'] == $_POST["product_size"])
				{
					if($values["product_quantity"] > 0){
					$is_available++;
					$_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] - 1;
					}

					if($_SESSION["shopping_cart"][$keys]['product_quantity'] == 0){
						unset($_SESSION["shopping_cart"][$keys]);
						$message = '<label class="text-success">Product Removed</label>';
					}

				}
			}
	}


	$order_table .= '
		'.$message.'
		<table class="table table-bordered">
			<tr>
				<th width="40%">Product Name</th>
				<td width="10%">Size</th>
				<th width="10%">Quantity</th>
				<th width="20%">Price</th>
				<th width="15%">Total</th>
				<th width="5%">Action</th>
			</tr>
		';
	if(!empty($_SESSION["shopping_cart"]))
	{
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["product_size"] == "12oz"){

			$order_table .= '
				<tr>
					<td>'.$values["product_name"].'</td>
					<td>'.$values["product_size"].'</td>
					<td>'.$values["product_quantity"].'</td>
					<td align="right">$ '.$values["product_price"].'</td>
					<td align="right">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
					<td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["product_id"].'">Remove</button></td>
				</tr>
			';


			//put total shits senior here
			$total = $total + ($values["product_quantity"] * $values["product_price"]);

			}

				elseif($values["product_size"] == "16oz"){

					$order_table .= '
					<tr>
						<td>'.$values["product_name"].'</td>
						<td>'.$values["product_size2"].'</td>
						<td>'.$values["product_quantity"].'</td>
						<td align="right">$ '.$values["product_price"].'</td>
						<td align="right">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
						<td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["product_id"].'">Remove</button></td>
					</tr>
				';
				$total = $total + ($values["product_quantity"] * $values["product_price"]);

				}

				elseif($values["product_size"] == "18oz"){

			$order_table .= '
				<tr>
					<td>'.$values["product_name"].'</td>
					<td>'.$values["product_size"].'</td>
					<td>'.$values["product_quantity"].'</td>
					<td align="right">$ '.$values["product_price"].'</td>
					<td align="right">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
					<td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["product_id"].'">Remove</button></td>
				</tr>
			';


			//put total shits senior here
			$total = $total + ($values["product_quantity"] * $values["product_price"]);

			}

		}
		$order_table .= '
			<tr>
				<td colspan="3" align="right">Total</td>
				<td align="right">$ '.number_format($total, 2).'</td>
				<td></td>
			</tr>
		';
	}
	$order_table .= '</table>';

	$output = array(
		'order_table'	=>	$order_table,
		'cart_item'		=>	count($_SESSION["shopping_cart"])
	);
	$_SESSION['total'] = $total;
	echo json_encode($output);
	//unset($_SESSION["shopping_cart"][$keys]);
}
