<?php
session_start();

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }

$data = $_POST;

if (empty($data['Name']) || empty($data['Comment']))
{
	die('Please fill all required fields!');
}

if ($data['Name'] !== $_SESSION['Username']) 
{
	echo "Suspicious login. <br> click here to <a
		href = 'index.php'>login again</a>";

} else {

	$username = $_POST['Name'];

if (isset($_POST['CommentSubmit'])) 
{
	
	$comment  = $_POST['Comment'];
	
 
	$sql = "INSERT INTO comments (name, comment) VALUES ('$username', '$comment')";
	if (mysqli_query($conn, $sql)) {
		header("location: welcome.php");
	} else {
      		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}
}

?>
		
		


