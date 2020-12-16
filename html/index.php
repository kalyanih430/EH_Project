<html>

	<head>
		<title>Landing Page</title>
	</head>
 
	<body>
		<h1> WELCOME!! </h1><br>
		<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJYjDmovHbWoR9Obhxx2B2pYnjIPrVRaOqzQ&usqp=CAU"><br><br>

		<form action="login.php" method="POST">
			<label for ="Username"><b>Username:<b></label>
			<input type= "text" name= "Username" placeholder ="Username" id="Username"required><br><br>
			<label for "Password"><b>Password:<b></label>
			<input type= "password" name="Password" placeholder="Password" id="Password"required><br><br>
			<input type= "submit" name="Login"value="Login">
			<input type="checkbox" name ="remember" value="1">Remember Me
		</form>

		<form action="register.php" method="POST">
			<input type= "submit" name="Register" value="Register">
		</form>
	</body>

</html>

<?php

if(isset($_COOKIE['Username']) and isset($_COOKIE['Password'])) {
        $username = $_COOKIE['Username'];
	$password = $_COOKIE['Password'];
	echo "<script>
	       document.getElementById('Username').value = '$username';
	       document.getElementById('Password').value = '$password';
		</script>";
							      }
?>


