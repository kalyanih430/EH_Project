<?php

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
if(!$conn)
{
	die("Could not connect:".mysqli_error());
}

if(isset($_POST['Search'])) {

	$value = $_POST['searchvalue'];
	$sql = "SELECT * from users where Name='$value'or 'x'='x' ";
	$rs = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($rs)) {
		echo $row['Name']."<br>";
		echo $row['email_address']."<br><br>";
	} 
mysqli_free_result($rs);
mysqli_close($conn);
}
?>






