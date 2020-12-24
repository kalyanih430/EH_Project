<?php
session_start();
$data = $_POST;

if (empty($data['Name']) || empty($data['password']) || empty($data['email']) || empty($data['cpassword']))
{
	die('Please fill all required fields!');
}

if ($data['password'] !== $data['cpassword']) 
{
	die('Password and Confirm password should match!');   
} else {

	$setpassword = $data['password'];
}

$con = mysqli_connect("localhost:3306", "admin", "adpassword");
mysqli_select_db($con,"EH_Project");

$username = $_POST['Name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$str = "select * from users where Name = '$username'";

$result = mysqli_query($con, $str);
$num= mysqli_num_rows($result);

if($num == 1)
{
	echo " Username already Taken";
} else {

	$reg = " Insert into users (Name, email_address, password) values ('$username', '$email','$setpassword')";
	mysqli_query($con, $reg);
	$_SESSION['Name'] = '$username';
	header("location: index.php");
	
}

?>
