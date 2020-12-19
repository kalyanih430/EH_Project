<html>
<head>
	<title> Comments </title>
	<style type="text/css">
	table {
		border-collapse: collapse;
		width: 100%;
		color: #588c7e;
		font-family: monnospace;
		font-size: 25px;
		text-align: left;
		}
	th {
	background-clor: #588c7e;
	color : white;
	}
	</style>

</head>
<body>
<table>
	<tr>
		<th>name</th>
		<th>comment</th>
	</tr>

	<?php

	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT name,comment from comments";
	$result= $conn-> query($sql);
	
	if($result-> num_rows >0) {
		while($row = $result-> fetch_assoc()) {
			echo "<tr><td>" . $row["name"] ."</td><td>". $row["comment"] ."</td></tr>";
           		}
		echo "</table>";
	}
	else {
		echo "0 result";
	}
	$conn-> close();
	?>
</table>
</body>
</html>		


