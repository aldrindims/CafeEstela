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
          <button name="" class="btn btn-danger btn-md" onClick="return confirm('Are you sure you want to logout?');">Logout</button>
          </form>
        <div class="col-sm-12"><h1>Cafe Estela</h1></div>
        <div class="clearfix"></div>
      </div>

      <ul class="nav nav-tabs navbar-right">
        <li><a href="adm.php">Stocks</a></li>
        <li><a href="admreports.php">Report</a></li>
        <li><a href="admprices.php">Prices</a></li>
        <li><a href="admacc.php">Account Management</a></li>
        <li class="active"><a href="addprod.php">Add Product</a></li>
      </ul>

      <div class="clearfix"></div>

      <div class="tab-content white-bg">
        <div id="stocks" class="tab-pane fade in active">         
<div>
          <h1>Manage User Accounts</h1>
          
		  <div>
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
		  
		  
          <ul class="nav nav-pills nav-stacked col-xs-1">
            <li class="active"><a data-toggle="tab" href="#drinks">Add Drinks</a></li>
            <li><a data-toggle="tab" href="#meals">Add Meals</a></li>
            <li><a data-toggle="tab" href="#ingr">Add Ingredients</a></li>
          </ul>

          <div class="tab-content">
            <div id="drinks" class="tab-pane fade in active">
              <?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
    $connect = mysqli_connect($servername, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD']=='POST'){

  $product = $_POST['product'];
  $price = $_POST['price'];
  $price2 = $_POST['price2'];

  $sql = "INSERT INTO tbl_product (name, price, price2, image) VALUES ('$product', '$price', '$price2', 'Espresso.jpg')";
    if (mysqli_query($connect, $sql)) {
        $sql = "SELECT id FROM tbl_product WHERE name = '$product'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $prodid =  $row["id"];
            $sql = "INSERT INTO tbl_prod_ingr (prod_id) VALUES ('$prodid')";
                if (mysqli_query($connect, $sql)) {
                  $ingr1id = $_POST['boxes1'];
                  $ingrm1 = $_POST['box1'];
                  $sql = "UPDATE tbl_prod_ingr SET ingr1_id = $ingr1id, ingrm1 = $ingrm1 WHERE prod_id = $prodid";
                  if(mysqli_query($connect, $sql)){
                    $ingr2id = $_POST['boxes2'];
                    $ingrm2 = $_POST['box2'];
                    $sql = "UPDATE tbl_prod_ingr SET ingr2_id = $ingr2id, ingrm2 = $ingrm2 WHERE prod_id = $prodid";
                    if(mysqli_query($connect, $sql)){
                      $ingr3id = $_POST['boxes3'];
                      $ingrm3 = $_POST['box3'];
                      $sql = "UPDATE tbl_prod_ingr SET ingr3_id = $ingr3id, ingrm3 = $ingrm3 WHERE prod_id = $prodid";
                      if(mysqli_query($connect, $sql)){
                        $ingr4id = $_POST['boxes4'];
                        $ingrm4 = $_POST['box4'];
                        $sql = "UPDATE tbl_prod_ingr SET ingr4_id = $ingr4id, ingrm4 = $ingrm4 WHERE prod_id = $prodid";
                        if(mysqli_query($connect, $sql)){
                          $ingr5id = $_POST['boxes5'];
                          $ingrm5 = $_POST['box5'];
                          $sql = "UPDATE tbl_prod_ingr SET ingr5_id = $ingr5id, ingrm5 = $ingrm5 WHERE prod_id = $prodid";
                          if(mysqli_query($connect, $sql)){
                            $ingr6id = $_POST['boxes6'];
                            $ingrm6 = $_POST['box6'];
                            $sql = "UPDATE tbl_prod_ingr SET ingr6_id = $ingr6id, ingrm6 = $ingrm6 WHERE prod_id = $prodid";
                            if(mysqli_query($connect, $sql)){
                              $ingr7id = $_POST['boxes7'];
                              $ingrm7 = $_POST['box7'];
                              $sql = "UPDATE tbl_prod_ingr SET ingr7_id = $ingr7id, ingrm7 = $ingrm7 WHERE prod_id = $prodid";
                              if(mysqli_query($connect, $sql)){
                                
                              }else{
                                
                              }
                            }else{
                              
                            }
                          }else{
                            
                          }
                        }else{
                          
                        }
                      }else{
                        
                      }
                    }else{
                      
                    }
                  }else{
                    
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
      
  
  ?>
      <script type="text/javascript">
            function show1() {
                document.getElementById("dThreshold1").style.display = "block";
            }
            function show2() {
                document.getElementById("dThreshold2").style.display = "block";
            }
            function show3() {
                document.getElementById("dThreshold3").style.display = "block";
            }
            function show4() {
                document.getElementById("dThreshold4").style.display = "block";
            }
            function show5() {
                document.getElementById("dThreshold5").style.display = "block";
            }
            function show6() {
                document.getElementById("dThreshold6").style.display = "block";
            }
            function show7() {
                document.getElementById("dThreshold7").style.display = "block";
            }
            function hide2() {
                document.getElementById("dThreshold2").style.visibility = "hidden";
            }
            function hide3() {
                document.getElementById("dThreshold3").style.visibility = "hidden";
            }
            function hide4() {
                document.getElementById("dThreshold4").style.visibility = "hidden";
            }
            function hide5() {
                document.getElementById("dThreshold5").style.visibility = "hidden";
            }
            function hide6() {
                document.getElementById("dThreshold6").style.visibility = "hidden";
            }
            function hide7() {
                document.getElementById("dThreshold7").style.visibility = "hidden";
            }
        </script>
      <form method="POST" action="">
        <input type="submit" name="addproduct" value="Add Product" />
          <input type="text" name="product" placeholder="Product" />
          <input type="text" name="price" placeholder="Price" />
          <input type="text" name="price2" placeholder="Price2" /><br/>
          <input type="button" onclick="show2();" value="Add" />
        <select name="boxes1">
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
        <input type="text" name="box1" placeholder="BawasIngredient1" />

        <div id="dThreshold2" style="display: none">
              <input type="button" onclick="show3();" value="Add" />
        <select name="boxes2">
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
              <input type="text" name="box2" placeholder="BawasIngredient2" />
              <input type="button" onclick="hide2();" value="Remove" />
          </div>

          <div id="dThreshold3" style="display: none">
              <input type="button" onclick="show4();" value="Add" />
              <select name="boxes3">
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
              <input type="text" name="box3" placeholder="BawasIngredient3" />
              <input type="button" onclick="hide3();" value="Remove" />
          </div>

          <div id="dThreshold4" style="display: none">
              <input type="button" onclick="show5();" value="Add" />
              <select name="boxes4">
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
              <input type="text" name="box4" placeholder="BawasIngredient4" />
              <input type="button" onclick="hide4();" value="Remove" />
          </div>

          <div id="dThreshold5" style="display: none">
              <input type="button" onclick="show6();" value="Add" />
              <select name="boxes5">
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
              <input type="text" name="box5" placeholder="BawasIngredient5" />
              <input type="button" onclick="hide5();" value="Remove" />
          </div>

          <div id="dThreshold6" style="display: none">
              <input type="button" onclick="show7();" value="Add" />
              <select name="boxes6">
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
              <input type="text" name="box6" placeholder="BawasIngredient6" />
              <input type="button" onclick="hide6();" value="Remove" />
          </div>

          <div id="dThreshold7" style="display: none">
              <select name="boxes7">
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
              <input type="text" name="box7" placeholder="BawasIngredient7" />
              <input type="button" onclick="hide7();" value="Remove" />
          </div>
      </form>

            <div id="meals" class="tab-pane fade">
             
            </div>
            
            
            <div id="ingr" class="tab-pane fade">
            <?php
  error_reporting(E_ALL ^ E_DEPRECATED);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  $connect = mysqli_connect($servername, $username, $password, $dbname);

  if($_SERVER['REQUEST_METHOD']=='POST'){

  $name = $_POST['name'];
  $size = $_POST['size'];
  $max = $_POST['max'];
  $sql = "INSERT INTO tbl_ingredients (name, size, MaxSize) VALUES ('$name', '$size', '$max')";
      if (mysqli_query($connect, $sql)) {
        echo "Success";
      }else{
        echo "Error";
      }
  }
?>
  
  <form method="POST">
<input type="text" name="name" placeholder="ingredient">
<input type="number" name="size" placeholder="size">
<input type="number" name="max" placeholder="maxsize">
<input type="submit" value="Add">
</form>          
            </div>
            
            
          </div>
          
        </div>  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="CSS/bootstrap.min.js"></script>
  
  </form>  
  
  
  </body>
</html>