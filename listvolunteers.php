<?php
require 'config.php';
$district = $_POST['district'];
if ($district == "All") {
	$query1 = "SELECT Name as one, Mobile1 as two, Mobile2 as three, Field as four, District as five FROM volunteers WHERE 1 ";
}
else{
	$query1 = "SELECT Name as one, Mobile1 as two, Mobile2 as three, Field as four, District as five FROM volunteers WHERE District = '$district' ";
}
$result1 = mysqli_query($con, $query1);
$rows = array();
while ($temp = mysqli_fetch_assoc($result1)) {
	$rows[] = $temp;
}
mysqli_close($con);
echo json_encode($rows);
?>