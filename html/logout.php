<html>
<head>

	<style>
		body {

 			background-image: url("https://previews.123rf.com/images/vska/vska1505/vska150500080/39876782-new-future-technology-concept-abstract-background-for-business-solution.jpg");
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
