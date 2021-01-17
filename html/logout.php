<html>
<head>

	<style>
		body {

 			background-image: url("https://image.freepik.com/free-photo/arrangement-with-pink-flowers-white-vase_23-2148442372.jpg");
  			height: 100%;
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
	
	</style>

</head>
</html>


<?php

	session_start();
	session_destroy();
	if(isset($_COOKIE['Username']) and isset($_COOKIE['Password'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		setcookie('Username', $username, time()-1);
		setcookie('Password', $password, time()-1);
	}

	echo "<h2>You successfully logged out.</h2><a href ='index.php'> login again </a>";
?>
