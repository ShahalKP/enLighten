<?php
require 'config.php';
$district = $_POST['district'];
if ($district == "All") {
	$query1 = "SELECT Name as one, Address as two, Locality as eight, Mobile1 as three, Mobile2 as four, Landmark as five, Service as six, Status as seven FROM helpRequests WHERE 1 ORDER BY `Timestamp` ";
}
else{
	$query1 = "SELECT Name as one, Address as two, Locality as eight, Mobile1 as three, Mobile2 as four, Landmark as five, Service as six, Status as seven FROM helpRequests WHERE District = '$district' ORDER BY `Timestamp` ";
}
$result1 = mysqli_query($con, $query1);
$rows = array();
while ($temp = mysqli_fetch_assoc($result1)) {
	$rows[] = $temp;
}
mysqli_close($con);
echo json_encode($rows);
?>