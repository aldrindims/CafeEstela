<?php 
    session_start();
	
	
   ?>

<!DOCTYPE html>
<html lang="en">
   
	<head>
		<title>Login Page</title>

		<script src="css/jquery.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
		
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>

	<body>
		<div align="center">
			<div class="content">
			
		<?php 
		$q1 = '';
		$q2 = '';
		$answ1 = '';
		$answ2 = '';
		$password = '';
		 //echo $_SESSION['id'];
		$connect = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * FROM tbl_login";
$result = mysqli_query($connect, $sql);

if ($result->num_rows > 0) {



    // output data of each row
    while($row = $result->fetch_assoc()) {
		$user = $row["username"];
		$id = $row["id"];
		
		
    	?>	
		
    	<?php 
		
		$newquery = "SELECT * FROM tbl_login WHERE ID='$_SESSION[id]'";
		mysqli_query($connect, $newquery);		
		
		if($_SESSION['id'] == $id){
		$q1 =  $row['q1'];						
		$answ1 = $row['ans1'];
		$q2 = $row['q2'];	
		$answ2 = $row['ans2'];
		$password = $row['password'];
		}
				
		}
		
	}
	
	
	
	if(isset($_POST['answer1']) == $answ1 && $_POST['answer2'] == $answ2){		
		echo "<script> alert('Your password is $password'); 
		window.location = 'USER1.php';
		</script>";
		
		session_destroy();
		
		
	}elseif(isset($_POST['answer1']) != '' || isset($_POST['answer2']) != ''){		
		
		echo "<script> alert('Incorrect answers') </script>"; 
		
	}


		?>
        						
		
					<form action="" method="post" id="formid">
						<span class="label"><?php echo $q1; ?></span><br/>
						<input type = "text" required name = "answer1" id="user" class = "box"/><br /><br/>
						<span class="label"><?php echo $q2; ?></span><br/>
						<input type = "text" required name = "answer2" id="user" class = "box"/><br /><br/>
						
						<div id="capslockdiv">
			                Caps lock is on
			            </div><br>
						<button type="submit" class="btn btn-default" >Submit</button>
					</form>
					
					<br>
					<form action = "USER1.php">
					<button type="submit" class="btn btn-default" >Home</button>
					</form>
					
			</div>
		</div>
		<script src="css/bootstrap.min.js"></script>
		<script src="css/jquery.min.js"></script>
		<script>			 			 
			 $(document).ready(
			    function () {
			        check_capslock_form($('#formid')); //applies the capslock check to all input tags
			    }
			 );

			document.onkeydown = function (e) { //check if capslock key was pressed in the whole window
			    e = e || event;
			    if (typeof (window.lastpress) === 'undefined') { window.lastpress = e.timeStamp; }
			    if (typeof (window.capsLockEnabled) !== 'undefined') {
			        if (e.keyCode == 20 && e.timeStamp > window.lastpress + 50) {
			            window.capsLockEnabled = !window.capsLockEnabled;
			            $('#capslockdiv').toggle();
			        }
			        window.lastpress = e.timeStamp;
			        //sometimes this function is called twice when pressing capslock once, so I use the timeStamp to fix the problem
			    }

			};

			function check_capslock(e) { //check what key was pressed in the form
			    var s = String.fromCharCode(e.keyCode);
			    if (s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey) {
			        window.capsLockEnabled = true;
			        $('#capslockdiv').show();
			    }
			    else {
			        window.capsLockEnabled = false;
			        $('#capslockdiv').hide();
			    }
			}

			function check_capslock_form(where) {
			    if (!where) { where = $(document); }
			    where.find('input,select').each(function () {
			        if (this.type != "hidden") {
			            $(this).keypress(check_capslock);
			        }
			    });
			}
		</script>
		
		<?php 
				
		
		
		
		?>
	</body>
</html>