<?php
session_start();

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }

echo "Login Successfull !! Welcome ".$_SESSION['Username'];



?>

<html>
<head>

	<style>
		body {
			
 			background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-watercolor-color-city-background-design-backgroundcity-backgroundbackground-materialcivilizationgreen-image_70171.jpg	");
  			height: 100%;
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
		
		
		.comment-box {
	    		width: 320px;
  			padding: 10px;
  			border: 1px solid gray;
  			margin: 0;
			}
		.topnav-right {
  			float: right;
			}
	</style>


<div class="topnav-right">
    <a href='profile.php'><br><b>Profile<b></a> <br>
   <a href='search.php'><br><b>Search<b></a> <br> <a href='logout.php'><br><b>Logout<b></a>
</div>

	  <form method='POST' action='functions.php'>
		<h4>Post a comment:</h4>
	  
	    <input name="Name" type="text" placeholder="Your Name" required><br>
	    <textarea name='Comment' id='Comment'  cols="50" rows="2" placeholder="Enter a comment"></textarea><br><br>
 	     <button type = 'submit' name='CommentSubmit'>Comment</button>
		
	 </form>


	<?php


	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT name,comment from comments";
	$result= $conn-> query($sql);
	echo "<h2>Comments</h2>";
	while($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'>";
		echo $row['name']."<br>";
		echo $row['comment'];
		echo "</div>";
	}
	

	?>	

    </body>

</html>











