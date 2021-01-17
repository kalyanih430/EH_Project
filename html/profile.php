<html>
<head>

	<style>
		body {
			text-align: left;
 			background-image: url("https://besthqwallpapers.com/Uploads/11-4-2020/128600/thumb2-purple-spring-flowers-flower-vase-stylish-pink-vase-flowers-on-the-table-spring.jpg");
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
	</style>

</head>
</html>



<?php
session_start();
echo "<h1>Welcome ".$_SESSION['Username']."</h1>";


	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT * FROM users WHERE Name = '".$_SESSION['Username']."'";
	$rs = mysqli_query($conn, $sql);
	echo "<h2>Profile Information : </h2>";
	while($row = mysqli_fetch_array($rs)) {
			echo "<h3><b>Username :</h3></b>".$row['Name']. "<br />";
    			echo "<h3><b>Email Address :</h3></b>".$row['email_address'] ."<br />";
		}
	mysqli_close($conn);

	
?>


<html>
<head>
	<a href='update.php'><br>Update Information</a> <br>    
</head>
</html>	