<?php
	$server = "localhost";
	$user = "root";
	$pass = "root";
	$db = "enlighten";
	$con = mysqli_connect($server,$user,$pass,$db);
	if(!$con){
		die('Error in DB : ' . mysqli_connect_error());
	}
?>