
<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "test");

$increment = $_SESSION['trans'] + 1;
$inc = mysqli_real_escape_string($connect, $increment);

	

	foreach($_SESSION["shopping_cart"] as $keys => $values){
			if($values["product_type"] == "drink"){	
			$sql1 = "SELECT * FROM tbl_prod_ingr ORDER BY `tbl_prod_ingr`.`id` ASC";
			$result=mysqli_query($connect, $sql1);

			while($row = $result->fetch_assoc()){
				if($row['id'] == $values['product_id']){
					$min_array = array(
					'product_id'			=>	$row['prod_id'],
					'product_quantity'		=>  $values['product_quantity'],
					'product_ingr1'			=>  $row['ingr1_id'],
					'product_ingr2'			=>  $row['ingr2_id'],
					'product_ingr3'			=>	$row['ingr3_id'],
					'product_ingr4'			=>	$row['ingr4_id'],
					'product_ingr5'			=>	$row['ingr5_id'],
					'product_ingr6'			=>	$row['ingr6_id'],
					'product_ingr7'			=>	$row['ingr7_id'],
					'product_ingrm1'			=>  $row["ingrm1"],
					'product_ingrm2'			=>  $row["ingrm2"],
					'product_ingrm3'			=>	$row["ingrm3"],
					'product_ingrm4'			=>	$row["ingrm4"],
					'product_ingrm5'			=>	$row["ingrm5"],
					'product_ingrm6'			=>	$row["ingrm6"],
					'product_ingrm7'			=>	$row["ingrm7"],
				);
				$_SESSION["cart"][] = $min_array;
				}
			}

			}	
			elseif( $values["product_type"] == "meals"){
			$sql2 = "SELECT * FROM tbl_meals_ingr ORDER BY `tbl_meals_ingr`.`id` ASC";
			$result2=mysqli_query($connect, $sql2);
			while($row2 = $result2->fetch_assoc()){
				if($row2['meal_id'] == $values['product_id']){
					$min_array2 = array(
					'meal_id'				=>	$row2['meal_id'],
					'product_quantity'		=>  $values['product_quantity'],
					'product_ingr1'			=>  $row2['ingr1_id'],
					'product_ingr2'			=>  $row2['ingr2_id'],
					'product_ingr3'			=>	$row2['ingr3_id'],
					'product_ingr4'			=>	$row2['ingr4_id'],
					'product_ingr5'			=>	$row2['ingr5_id'],
					'product_ingr6'			=>	$row2['ingr6_id'],
					'product_ingr7'			=>	$row2['ingr7_id'],
					'product_ingrm1'			=>  $row2["ingrm1"],
					'product_ingrm2'			=>  $row2["ingrm2"],
					'product_ingrm3'			=>	$row2["ingrm3"],
					'product_ingrm4'			=>	$row2["ingrm4"],
					'product_ingrm5'			=>	$row2["ingrm5"],
					'product_ingrm6'			=>	$row2["ingrm6"],
					'product_ingrm7'			=>	$row2["ingrm7"],
				);
				$_SESSION["cart2"][] = $min_array2;
				}
			}
				
			}		
	}


	if(isset($_SESSION["cart"])){
	$sql1 = "SELECT * FROM tbl_ingredients";
 	$result=mysqli_query($connect, $sql1);
 	while($row = $result->fetch_assoc()){ 		
		$size = $row["size"];
		$ctr = 0;
	foreach($_SESSION["cart"] as $keys => $values){	
			if($values["product_ingr1"] == $row["id"]){
				$ctr++;	
				$tomin = $values["product_ingrm1"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";								
				mysqli_query($connect, $sql2);				
			}
			if($values["product_ingr2"] == $row["id"]){
				$ctr++;
				$tomin = $values["product_ingrm2"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			if($values["product_ingr3"] == $row["id"]){	
				$ctr++;
				$tomin = $values["product_ingrm3"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr4"] == $row["id"]){
				$ctr++;
				$tomin = $values["product_ingrm4"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr5"] == $row["id"]){
				$ctr++;
				$tomin = $values["product_ingrm5"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr6"] == $row["id"]){
				$ctr++;
				$tomin = $values["product_ingrm6"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr7"] == $row["id"]){
				$ctr++;
				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr;				
				$total = $size - $tominfinal;				
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
		}
	}
}
	if(isset($_SESSION["cart2"])){
		$sql1 = "SELECT * FROM tbl_ingredients";
 	$result=mysqli_query($connect, $sql1);
 	while($row = $result->fetch_assoc()){ 		
		$size = $row["size"];
		$ctr2 = 0;
	foreach($_SESSION["cart2"] as $keys => $values){
			if($values["product_ingr1"] == $row["id"]){
				echo "<script>alert('hallo');</script>";
				$ctr2++;	
				$tomin = $values["product_ingrm1"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";								
				mysqli_query($connect, $sql2);				
			}
			if($values["product_ingr2"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm2"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			if($values["product_ingr3"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm3"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr4"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm4"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr5"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm5"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr6"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm6"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;			
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
			
			if($values["product_ingr7"] == $row["id"]){
				$ctr2++;
				$tomin = $values["product_ingrm7"] * $values["product_quantity"];
				$tominfinal = $tomin * $ctr2;				
				$total = $size - $tominfinal;				
				$sql2 = "UPDATE tbl_ingredients SET size=$total where id = ".$row["id"].";";
				mysqli_query($connect, $sql2);
			}
		}
	}
	}


	// foreach($_SESSION["shopping_cart"] as $keys => $value){
	// 	$name = $value["product_name"];
	// 	$price = $value["product_price"];
	// 	$date = date("Y-m-d");
		
	// 	$sql = "INSERT INTO `tbl_report` (`id`, `trans_no`, `prods`, `date`, `Amount`) VALUES ('$increment', '$increment', '$name', '$date', $price);";
	// 		mysqli_query($connect, $sql);

	// }
	
 	// $sql1 = "SELECT * FROM tbl_product";
 	// $result=mysqli_query($connect, $sql1);
	
// 		foreach ($_SESSION["cart"] as $keys => $value) {
			
// 				foreach($_SESSION["shopping_cart"] as $keys => $values){
// 					if( $value['product_id'] == $values['product_id']){

// 				}	
// 			}
// 			echo $value["product_quantity"]."<br>";
// 			echo $value["product_ingr1"]."<br>";
// 			echo $value["product_ingr2"]."<br>";
// 			echo $value["product_ingr3"]."<br>";
// 			echo $value["product_ingr4"]."<br>";
// 			echo $value["product_ingr5"]."<br>";
// 			echo $value["product_ingr6"]."<br>";
// 			echo $value["product_ingr7"]."<br>";
	
// }

foreach($_SESSION["shopping_cart"] as $keys => $value){
		$name = $value["product_name"];
		$price = $value["product_price"];
		$date = date("Y-m-d");
		
		$sql = "INSERT INTO `tbl_report` (`id`, `trans_no`, `prods`, `date`, `Amount`) VALUES ('$increment', '$increment', '$name', '$date', $price);";
			mysqli_query($connect, $sql);

	}
	$emp = $_SESSION['employee'];
	$total=$_SESSION["total"];
	$sql1 = "INSERT INTO `tbl_report_total` (`id`, `trans_no`, `date`, `total`, `user`, `user_temp`) VALUES (NULL, '$increment', '$date', '$total','$emp','')";
	mysqli_query($connect, $sql1);

Session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);
