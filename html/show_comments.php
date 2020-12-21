<html>
<head>
	<title> Comments </title>

</head>
<body>


	<?php

	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT name,comment from comments";
	$result= $conn-> query($sql);
	while($row = $result->fetch_assoc()) {
		echo $row['name']."<br>";
		echo $row['comment']."<br><br>";
	}
	
	?>
	
</body>
</html>		


