<?php
require 'config.php';
$name = $_POST[name];
$phone1 = $_POST[mobile];
$status = $_POST[status];
$query1 = "UPDATE helpRequests SET status = '$status', lastModified = NOW() WHERE Name = '$name' AND Mobile1 = '$phone1' ";
$result1 = mysqli_query($con,$query1);
?>