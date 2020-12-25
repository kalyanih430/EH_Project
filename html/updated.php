
<?php

session_start();
$con = mysqli_connect("localhost:3306", "admin", "adpassword");
$db= mysqli_select_db($con,"EH_Project");
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$data=$_POST;

if ($data['password'] !== $data['cpassword']) 
{
	die('Password and Confirm password should match!');   
} else {

	$setpassword = $data['password'];
}


if ($data['Username'] != $_SESSION['Username']) 
{
	echo "Enter correct Username. <br> click here to <a
		href = 'update.php'>update again</a>";

} else {

	$username = $_POST['Username'];
	$email = $_POST['Email'];

	$str = "select * from users where Name = '$username'";

	$result = mysqli_query($con, $str);
	$num= mysqli_num_rows($result);

	if($num == 1) {
		$reg = " update users set Name = '".$username."', email_address='".$email."', password ='".$setpassword."' where Name = '".$username."'";
		$run = mysqli_query($con, $reg);
		$_SESSION['Name'] = '$username';
		header("location: welcome.php");
	}
	else {
		echo " Username Not Present in database";
	}
}
 
	
mysqli_close($con);
?>