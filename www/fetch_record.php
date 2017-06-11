<?php
$output="";
$connect = mysqli_connect("localhost", "root", "", "test");
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    $sql= "SELECT * FROM tbl_report WHERE id=$id";
    $result= mysqli_query($connect,$sql);
    $output .= "
    <table class='table table-bordered table-condensed' style='font-size:1em;'>
    		<tr>
        		<th>Products</th>
				<th>Size</th>
			<th>Quantity</th>
        		<th>Price</th>
    		</tr>
    ";
    while($row = $result->fetch_assoc()){
    	$output .="
    		<tr>
    		<td>".$row['prods']."</td>
			<td>". $row['size'] ."</td>
		<td>". $row['qty'] ."</td>
    		<td>" . '&#8369;' .$row["Amount"]."</td>
    		</tr>
    	";
    }
    $output .="</table>";
    echo $output;
 }
?>