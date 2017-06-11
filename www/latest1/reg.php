<?php

error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$_SESSION['message'] = '';
  $dbhandle = mysqli_connect('localhost', 'root', '', 'test');

    if(isset($_POST['username']) && isset($_POST['currentpassword']) && isset($_POST['newpassword'])){
       $user = $_POST['username'];
      $oldpass = $_POST['currentpassword'];
      $newpass = $_POST['newpassword'];
      $query = mysqli_query($dbhandle,"SELECT * FROM tbl_login WHERE username ='$user'");
      if(mysqli_num_rows($query) > 0){
        $sql = mysqli_query($dbhandle,"SELECT * FROM tbl_login WHERE password ='$oldpass'");
        if(mysqli_num_rows($sql) > 0){
        if($_POST['currentpassword'] !== $_POST['newpassword']){
            if($_POST['newpassword'] === $_POST['confirmpassword']){
                mysqli_query($dbhandle,"UPDATE tbl_login SET password= '$newpass' WHERE username='$user'");
                header("location: reg.php");
            }
            else{
                $_SESSION['message'] = "Your new passwords did not match";
            }
        }
        else{
            $_SESSION['message'] = "Current password and new password cannot be the same";    
        }
    }else{
        $_SESSION['message'] = "Mali pw";
    }
      }
      else{
        $_SESSION['message'] = "Walang ganang account";
      }

    }
    mysqli_close($dbhandle);
?>

    <h1>Change password</h1>
    <form action="reg.php" method="post">
    <div class="alert alert-error"><?= $_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required /> 
      <input type="password" placeholder="Current Password" name="currentpassword" required />
      <input type="password" placeholder="New Password" name="newpassword" required />
      <input type="password" placeholder="Confirm New Password" name="confirmpassword" required />
      <input type="submit" value="Register" name="register"/>
    </form>