<?php

	$hostname = "gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
	$username = "admin";
	$password = "admin";
	$database = "USERDB";


	$conn2 = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB");
	$query = "SELECT * FROM estudiantes";
    $conn = mysqli_query($conn2, $query) or die("Failed: " . mysqli_error()); 

?>