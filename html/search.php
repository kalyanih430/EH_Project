<html>
<head>

	<style>
		body {
 			background-image: url("https://besthqwallpapers.com/Uploads/11-4-2020/128600/thumb2-purple-spring-flowers-flower-vase-stylish-pink-vase-flowers-on-the-table-spring.jpg");
  			height: 100%;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
		
	</style>

</head>

</html>


<?php
session_start();
$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
if(!$conn)
{
	die("Could not connect:".mysqli_error());
}

if(isset($_POST['Search'])) {

	$value = $_POST['searchvalue'];
	$reg = "SELECT * from users where Name='$value'";
	$run = mysqli_query($conn, $reg);
	if(mysqli_num_rows($run) == 0)
	{ 
		echo "Enter a valid entry to search<br>";
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  		echo "<a href='$url'>Search again</a>"; 
	}
	else {
		echo "<h2>Search Result</h2>";
		while($row = mysqli_fetch_array($run)) 
		{
			echo "Name: ".$row['Name']."<br>";
			echo "Email Address: ".$row['email_address']."<br><br>";
		}
	}

}
mysqli_free_result($rs);
mysqli_close($conn);

?>
