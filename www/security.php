<?php 
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	
	
	$connection = mysqli_connect("localhost","root","");
 mysqli_select_db($connection,"test");
   ?>

<!DOCTYPE html>
<html lang="en">
   
	<head>
		<title>Enter Username</title>

		<script src="css/jquery.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
		
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>

	<body>
		<div align="center">
			<div class="content">
			
					<form action="forgotprocess.php" method="post" id="formid">
						<span class="label">UserName</span><br/><input type = "text" required name = "user" id="user" class = "box"/><br /><br />
						
						<div id="capslockdiv">
			                Caps lock is on
			            </div><br>
				
						<button type="submit" class="btn btn-default" style="float:left; position: relative; left: 42%;">Submit</button>
						
					</form>
					<form action = "USER1.php">
						<span style="display: inline;">
						<button type="submit" class="btn btn-default" >Go back</button>
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
				
		
		$_SESSION['count'] = '0';
		
		?>
	</body>
</html>