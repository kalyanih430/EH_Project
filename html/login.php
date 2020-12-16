<?php

#session_start();

	$username = $_POST['Username'];
	$password = $_POST['Password'];

	$con = mysqli_connect("localhost", "admin", "adpassword");
	mysqli_select_db($con,"EH_Project");

	$str = "SELECT * FROM users WHERE Name = '$username' and password = '$password'";
	$result = mysqli_query($con,$str);
	$row = mysqli_fetch_array($result);
	if ($row['Name'] == $username && $row['password'] == $password) {
		echo "Login Successfull !! Welcome".$row["Name"];
	} else {
		echo "Failed to login";
	}

?>

		
