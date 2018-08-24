<?php
require 'config.php';
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$district = mysqli_real_escape_string($con,$_POST['district']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$contribution = mysqli_real_escape_string($con,$_POST['contribution']);
	echo "<script>alert('$name');</script>";
	$query1 = "INSERT INTO donation(Name, Phone, District, Address, Contribution) VALUES('$name','$phone','$district','$address','$contribution') ";
	$result1 = mysqli_query($con,$query1);
	if (mysqli_error($con)=="") {
		echo "<script>alert('Request Submitted.');</script>";
	}
	mysqli_close($con);
}
require 'header.php';
?>
<div class="row">
    <div class="col-md-4"></div>
		<div class="col-md-4">
			<p style="text-align:center"> You can also contribute to the initiative:<br>
      ദുരിതാശ്വാസ നിധിയിലേക്ക് സംഭാവന ചെയ്യാം<br><br></p>
<table class="table"><tbody><tr><td>Account number</td><td>67339412833</td></tr><tr><td>Name on Account</td><td>AJEES K</td></tr><tr><td>Account Type</td><td>Savings</td></tr><tr><td>Bank</td><td>SBI</td></tr><tr><td>Branch</td><td>VAZHAKKAD</td></tr><tr><td>IFS Code</td><td>SBIN0017338</td></tr><tr><td>SWIFT Code</td><td>SBININBBT08</td></tr></tbody></table>
	</div>
		<div class="col-md-4"></div>
<div class="row">
<div class="col-sm-12 col-xs-12">
		<header>To Donate</br>സംഭാവന നല്‍കാന്‍</header>
	</div>
</div>
<form id="form" class="topBefore" method="post">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		  <input id="name" name="name" type="text" placeholder="NAME-പേര്">
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		  <input id="phone" name="phone" type="text" placeholder="Phone-ഫോണ്‍ നമ്പര്‍">
		  </div>
		<div class="col-md-4"></div>
	</div>
		  <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="nm_dis">
			<div class="row">
			<div class="col-sm-3 col-xs-3">	
		  <label for="id_district">District - ജില്ല</label>
		</div>
		<div class="col-sm-9 col-xs-9">	
		<select required name="district" id="id_district" Placeholder="District - ജില്ല">
		<option value="" selected="">---------</option>
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
	</div>
</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		  <textarea id="address" name="address" type="text" placeholder="Address - വിലാസം"></textarea>
		  </div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		   <textarea id="contribution" name="contribution" type="text" placeholder="What you can contribute. ( സംഭാവന ചെയ്യാന്‍ ഉദ്ദേശിക്കുന്ന സാധനങ്ങള്‍ )"></textarea>
		    </div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
  <input id="submit" type="submit" value="Submit!" name="submit">
      </div>
		<div class="col-md-4"></div>
		<div class="col-md-4 col-md-offset-4"><a href="index.php" style="margin:auto; width: 20%;">Go Back</a></div>
	</div>
</form>
<?php
require 'footer.php';
?>