<html>
<head>

	<style>
		body {

 			background-image: url("https://i.pinimg.com/originals/0d/af/b7/0dafb7928a99a9cb552a941895a6e586.jpg");
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
