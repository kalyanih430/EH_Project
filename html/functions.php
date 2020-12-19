<?php

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }

if (isset($_POST['CommentSubmit'])) 
{
	$username = $_POST['Name'];
	$comment  = $_POST['Comment'];
 
	$sql = "INSERT INTO comments (name, comment) VALUES ('$username', '$comment')";
	if (mysqli_query($conn, $sql)) {
		echo "Comment Inserted";
		//header("location: welcome.php");
	} else {
      		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
}

?>
		
		


