<?php
session_start();
if ($_SESSION['isLogin']) {
	header('Location: home.php');
}
require 'header.php';
if (isset($_POST['login'])) {
	require 'config.php';
	$user = mysqli_real_escape_string($con,$_POST['userId']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	$pass = sha1($pass);
	$query1 = "SELECT * FROM `admin` WHERE `UserName` = '$user' AND `Password` = '$pass' ";
	$result1 = mysqli_query($con,$query1);
	if (mysqli_num_rows($result1) > 0) {
		$_SESSION['isLogin'] = true;
		header('Location: home.php');
	}
	else{
		echo "<script>alert('Invalid Username/Password');</script>";
	}
	mysqli_close($con);
}
?>

<div class="contents">
	<form class="form-horizontal helpForm" action="login.php" method="post">
	  <div class="form-group">
	    <label for="userId" class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="userId" placeholder="Email" id="userId">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="pass" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="pass" placeholder="Password" id="pass">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" class="btn btn-primary" style="height: 40px; margin-top: 20px; width: 110px;" name="login" value="Sign In"><br><br>
		  <a href="index.php">Go back</a>
	    </div>
	  </div>
	</form>


</div>
<?php
require 'footer.php';
?>