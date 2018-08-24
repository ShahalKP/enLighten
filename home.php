<?php
session_start();
require 'config.php';
if (!$_SESSION['isLogin']) {
	mysqli_close($con);
	header('Location: login.php'); 
}
if (isset($_POST['Logout'])) {
    unset($_SESSION["isLogin"]);
    header('Location: login.php'); 
    mysqli_close($con);
}
require 'header.php';
?>
<div class="contents">
	<h2>Home</h2>
	
	<div class="homeButtons">
		<div class="form-group" style="width: 30%; margin: auto;">
			<div class="row">
		    <label for="District" class="col-sm-2 control-label">District / ജില്ല</label>
		    <div class="col-sm-10">
			    <select class="form-control" id="District" name="District">
			      <option value="All">All</option>
				  <option value="Kasargod">Kasargod</option>
				  <option value="Kannur">Kannur</option>
				  <option value="Wayanad">Wayanad</option>
				  <option value="Kozhikode">Kozhikode</option>
				  <option value="Malappuram">Malappuram</option>
				  <option value="Palakkad">Palakkad</option>
				  <option value="Thrissur">Thrissur</option>
				  <option value="Ernakulam">Ernakulam</option>
				  <option value="Idukki">Idukki</option>
				  <option value="Kottayam">Kottayam</option>
				  <option value="Alappuzhya">Alappuzhya</option>
				  <option value="Pathanamthitta">Pathanamthitta</option>
				  <option value="Kollam">Kollam</option>
				  <option value="Thiruvananthapuram">Thiruvananthapuram</option>
				</select>
		    </div>
		</div>
		  </div>
		<button class="button btn-success" onclick="listTasks()" style="margin-top: 30px;">Tasks</button><br><br>
		<button onclick="listVolunteers()">Volunteers</button>
		<form action="home.php" method="post">
			<input type="submit" value="Logout" name="Logout" class="button btn-danger logout">
		</form>
	</div>
	<div id="data">
		
	</div>
</div>
<?php
require 'footer.php';
?>