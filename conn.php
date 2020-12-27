<?php
 
$conn = mysqli_connect("localhost","root","","mess");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>