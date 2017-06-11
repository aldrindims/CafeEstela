<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$_SESSION['message'] = '';
  $dbhandle = mysql_connect('localhost', 'root', '');

  $selected = mysql_select_db("test", $dbhandle);

    if(isset($_POST['username']) && isset($_POST['password'])){
      if($_POST['password']==$_POST['confirmpassword']){
      $user = $_POST['username'];
      $pass = $_POST['password'];

      $query = mysql_query("SELECT * FROM tbl_login WHERE username ='$user'");
      if(mysql_num_rows($query) > 0){
        $_SESSION['message'] = "There is already a user with that username";
      }
      else{
        mysql_query("INSERT INTO tbl_login (username, password) VALUES ('$user', '$pass')");
        header("location: form.php");
      }
    }else{
      $_SESSION['message'] = "Passwords did not match";
  }
}
    mysql_close($dbhandle);
?>

    <h1>Create an account</h1>
    <form action="form.php" method="post">
    <div class="alert alert-error"><?= $_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="password" placeholder="Password" name="password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" required />
      <input type="submit" value="Register" name="register"/>
    </form>