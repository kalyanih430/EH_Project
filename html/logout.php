<?php

	session_start();
	session_destroy();
	if(isset($_COOKIE['Username']) and isset($_COOKIE['Password'])) {
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		setcookie('Username', $username, time()-1);
		setcookie('Password', $password, time()-1);
	}

	echo "You successfully logout.click here to <a href ='index.php'> login again </a>";
?>
