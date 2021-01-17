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
			text-align:center;
 			background-image: url("https://image.freepik.com/free-photo/arrangement-with-pink-flowers-white-vase_23-2148442372.jpg");
  			height: 100%;
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;
			}
		
		
		.comment-box {
			text-align:left;
	    		width: 520px;
  			padding: 5px;
  			border: 1px solid gray;
  			margin: 0;
			}
		.topnav-right {
  			float: right;
			}
		form {
    			display: inline-block;
			}
	</style>

<div class="topnav-right">

<form method='POST' action='search.php'>
<input type='text' name='searchvalue' placeholder='Search user'><br>
<button type = 'submit'name='Search'>Search</button><br><br>
</div>
</form>
<div>
   <a href='profile.php'><br><b>View Profile<b></a>
   <a href='logout.php'><br><b>Logout<b></a>
</div>




	  <form method='POST' action='functions.php'>
		<h4>Post a comment:</h4>
	  
	    <input name="Name" type="text" placeholder="Your Name" required>
	    <textarea name='Comment' id='Comment'  cols="50" rows="2" placeholder="Enter a comment"></textarea>
 	    <button type = 'submit' name='CommentSubmit'>Comment</button>
		
	 


	<?php
	


	$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
	
	$sql = "SELECT name,comment from comments";
	$result= $conn-> query($sql);
	
	echo "<br>Comments<br>";
	while($row = $result->fetch_assoc()) {
		echo "<div class='comment-box'>";
		echo $row['name']."<br>";
		echo $row['comment'];
		echo "</div>";
	}
	

	?>	

          </form>
    </body>

</html>













