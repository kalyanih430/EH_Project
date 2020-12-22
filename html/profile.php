<html>
<head>

	<style>
		body {
			text-align: center;
 			background-image: url("https://png.pngtree.com/thumb_back/fw800/back_pic/04/48/50/00585a3568a0a7d.jpg");
  			height: 100%;
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
		p 	{
 			font-size: 0.875em;
			}
	</style>

</head>
</html>



<?php
session_start();
echo "Welcome ".$_SESSION['Username'];


	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT * FROM users WHERE name = '".$_SESSION['Username']."'";
	$rs = mysqli_query($conn, $sql);
	echo "<h2>Profile Information</h2>";
	while($row = mysqli_fetch_array($rs)) {
			echo $row['Name'] . "<br />";
    			echo $row['email_address'] . "<br />";
		}
	mysqli_close($conn);

	
?>


<html>
<head>
	<a href='update.php'><br>Update Information</a> <br>    
</head>
</html>	