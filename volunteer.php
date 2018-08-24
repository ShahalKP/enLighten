<?php
session_start();
if (isset($_POST['helpSubmit'])) {
	require 'config.php';
	$name = mysqli_real_escape_string($con,$_POST['volName']);
	$age = mysqli_real_escape_string($con,$_POST['volAge']);
	$phone1 = mysqli_real_escape_string($con,$_POST['volPhone1']);
	$phone2 = mysqli_real_escape_string($con,$_POST['volPhone2']);
	$email = mysqli_real_escape_string($con,$_POST['volEmail']);
	$district = mysqli_real_escape_string($con,$_POST['volDistrict']);
	$field = mysqli_real_escape_string($con,$_POST['volField']);
	$institution = mysqli_real_escape_string($con,$_POST['volInstitution']);
	$query1 = "INSERT INTO volunteers(`Name`, `Age`, `Mobile1`, `Mobile2`, `Email`, `District`, `Field`, `Institution`) VALUES('$name', '$age', '$phone1', '$phone2', '$email', '$district', '$field', '$institution') ";
	$result1 = mysqli_query($con, $query1);
	if (mysqli_error($con) == "") {
		echo "<script>alert('Request Submitted.');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
	else{
		echo "<script>alert('Some error occured. ERR_651');</script>";
	}
	mysqli_close($con);
}
require 'header.php';
?>
<div class="container-fluid contents">
	<h3>Volunteer Registration Form</h3><br>
	<p>Please fill below form.<br>
താഴെയുള്ള ഫോം പൂരിപ്പിക്കൂ.</p>
	<br><br>
	<form class="form-horizontal helpForm" name="helpSubmit" method="post">
	  <div class="form-group">
	    <label for="volName" class="col-sm-2 control-label">Name / പേര്</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="volName" name="volName" placeholder="Name / പേര്" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volAge" class="col-sm-2 control-label">Age / പ്രായം</label>
	    <div class="col-sm-10">
	      <input type="number" class="form-control" id="volAge" name="volAge" placeholder="Age / പ്രായം">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volPhone1" class="col-sm-2 control-label">Phone No / മൊബൈൽ (1)</label>
	    <div class="col-sm-10">
	      <input type="number" class="form-control" id="volPhone1" name="volPhone1" placeholder="Phone No / മൊബൈൽ (1)" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volPhone2" class="col-sm-2 control-label">Phone No / മൊബൈൽ (2)</label>
	    <div class="col-sm-10">
	      <input type="number" class="form-control" id="volPhone2" name="volPhone2" placeholder="Phone No / മൊബൈൽ (2)">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volEmail" class="col-sm-2 control-label">Email / ഇമെയിൽ</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" id="volEmail" name="volEmail" placeholder="Email / ഇമെയിൽ">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volDistrict" class="col-sm-2 control-label">District / ജില്ല</label>
	    <div class="col-sm-10">
	    <select class="form-control" id="volDistrict" name="volDistrict">
		  <option value="Kasargod">Kasaragod - കാസർഗോഡ്</option>
		  <option value="Kannur">Kannur - കണ്ണൂർ</option>
		  <option value="Wayanad">Wayanad - വയനാട്</option>
		  <option value="Kozhikode">Kozhikode - കോഴിക്കോട്</option>
		  <option value="Malappuram">Malappuram - മലപ്പുറം</option>
		  <option value="Palakkad">Palakkad - പാലക്കാട്</option>
		  <option value="Thrissur">Thrissur - തൃശ്ശൂർ</option>
		  <option value="Ernakulam">Ernakulam - എറണാകുളം</option>
		  <option value="Idukki">Idukki - ഇടുക്കി</option>
		  <option value="Kottayam">Kottayam - കോട്ടയം</option>
		  <option value="Alappuzhya">Alappuzha - ആലപ്പുഴ</option>
		  <option value="Pathanamthitta">Pathanamthitta - പത്തനംതിട്ട</option>
		  <option value="Kollam">Kollam - കൊല്ലം</option>
		  <option value="Thiruvananthapuram">Thiruvananthapuram - തിരുവനന്തപുരം</option>
		</select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volField" class="col-sm-2 control-label">Field of study/work</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="volField" name="volField" placeholder="Field of study/work">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="volInstitution" class="col-sm-2 control-label">Institution of study/work</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="volInstitution" name="volInstitution" placeholder="Institution of study/work">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary" id="helpSubmit" name="helpSubmit">Submit / സമർപ്പിക്കുക</button><br>
	      </form>
	      <br>
	      <a href="index.php">Back</a>
	    </div>
	  </div>
	
</div>
<?php
require 'footer.php';
?>