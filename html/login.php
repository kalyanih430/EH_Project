<?php

#session_start();
if(isset($_POST['Login'])) {
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	
	$con = mysqli_connect("localhost", "admin", "adpassword");
	mysqli_select_db($con,"EH_Project");

	$str = "SELECT * FROM users WHERE Name = '$username' and password = '$password'";
	$result = mysqli_query($con,$str);
	$row = mysqli_fetch_array($result);
	if ($row['Name'] == $username && $row['password'] == $password) {
		#header("location: welcome.php");

		if(isset($_POST['remember'])) {
			setcookie('Username', $username, time()+60*2);
			setcookie('Password', $password, time()+60*2);
		}
		session_start();
		$_SESSION['Username']= $username;
		header("location: welcome.php");
		#echo "Login Successfull !! Welcome".$row["Name"];
	} else {
		echo "Failed to login. <br> click here to <a
			href = 'index.php'>try again</a>";
	}


} else { 
	 header("location: index.php");
}

?>

		
