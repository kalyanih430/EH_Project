<?php
include "search.php";
session_start();

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
if(!$conn)
{
	die("Could not connect:".mysqli_error());
}

if($_POST['value'] == 'Name')) {
    
        $query = "SELECT Name FROM users";
	$sql = mysqli_query($query);
	$result= $conn-> query($sql);
	while($row = $result->fetch_assoc()) 
	{
		echo $row['Name']."<br>";
	}
}
else if($_POST['value'] == 'Email') {
 
        $query = "SELECT email_address FROM users";
	$sql = mysqli_query($query);
	$result= $conn-> query($sql);
	while($row = $result->fetch_assoc()) 
	{
		echo $row['email_address']."<br>";
	}
}

?>

