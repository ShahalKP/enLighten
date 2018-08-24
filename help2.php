<?php
session_start();
if (isset($_POST['helpSubmit'])) {
	require 'config.php';
	$name = mysqli_real_escape_string($con,$_POST['reqName']);
	$district = mysqli_real_escape_string($con,$_POST['reqDistrict']);
	$phone1 = mysqli_real_escape_string($con,$_POST['reqPhone1']);
	$phone2 = mysqli_real_escape_string($con,$_POST['reqPhone2']);
	$address = mysqli_real_escape_string($con,$_POST['reqAddress']);
	$locality = mysqli_real_escape_string($con,$_POST['reqLocality']);
	$landmark = mysqli_real_escape_string($con,$_POST['reqLandmark']);
	$service = mysqli_real_escape_string($con,$_POST['reqService']);
	$query1 = "INSERT INTO helpRequests(`Name`, `District`, `Address`, `Locality`, `Mobile1`, `Mobile2`, `Landmark`, `Service`) VALUES('$name', '$district', '$address', '$locality', '$phone1', '$phone2', '$landmark', '$service') ";
	$result1 = mysqli_query($con, $query1);
	if (mysqli_error($con) == "") {
		echo "<script>alert('Request Submitted.');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
	else{
		echo "<script>alert('Some error occured. ERR_777');</script>";
	}
	mysqli_close($con);
}
require 'header.php';
?>
<div class="container-fluid contents">
	<p>Please enter the details below as accurate as possible.<br>
കഴിയുന്നത്ര കൃത്യമായി ചുവടെയുള്ള വിശദാംശങ്ങൾ ദയവായി നൽകുക.</p>
	<br><br>
	<form class="form-horizontal helpForm" name="helpSubmit" method="post">
	  <div class="form-group">
	    <label for="reqName" class="col-sm-2 control-label">Name / പേര്</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="reqName" name="reqName" placeholder="Name / പേര്" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="reqDistrict" class="col-sm-2 control-label">District / ജില്ല</label>
	    <div class="col-sm-10">
	    <select class="form-control" id="reqDistrict" name="reqDistrict">
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
	    <label for="reqPhone1" class="col-sm-2 control-label">Phone No / മൊബൈൽ (1)</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="reqPhone1" name="reqPhone1" placeholder="Phone No / മൊബൈൽ (1)" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="reqPhone2" class="col-sm-2 control-label">Phone No / മൊബൈൽ (2)</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="reqPhone2" name="reqPhone2" placeholder="Phone No / മൊബൈൽ (2)">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="reqAddress" class="col-sm-2 control-label">Address / വിലാസം</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" id="reqAddress" name="reqAddress" placeholder="Address / വിലാസം" rows="3" required></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="reqAddress" class="col-sm-2 control-label">Locality / പ്രദേശം</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="reqLocality" name="reqLocality" placeholder="Locality / പ്രദേശം" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="reqLandmark" class="col-sm-2 control-label">Landmark / അടയാളം</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="reqLandmark" name="reqLandmark" placeholder="Landmark / അടയാളം">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="reqService" class="col-sm-2 control-label">Service / സേവനം</label>
	    <div class="col-sm-10">
	    <select class="form-control" id="reqService" name="reqService">
		  <option value="Electrical">Electrical</option>
		  <option value="Cleaning">Cleaning</option>
		  <option value="Manual Work">Manual Work</option>
		</select>
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