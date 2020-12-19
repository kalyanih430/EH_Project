<?php
//include 'functions.php';
session_start();

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }

echo "Login Successfull !! Welcome ".$_SESSION['Username'];

?>

<html>
	</body>

	<form method='POST' action='functions.php'>
	    <input type='hidden' name='Name' value='Anonymous'>
	    <textarea name='Comment' id='Comment'  cols="50" rows="2" placeholder="Enter a comment"></textarea><br>
 	     <button type = 'submit' name='CommentSubmit'>Comment</button>
	 </form>

	<form method='POST' action='show_comments.php'>
 	     <button type = 'submit' name='ShowComment'>Show Previous Comments</button>
	 </form>	

    </body>

</html>


<?php

echo "Thank you for visiting!!";
echo "<a href='logout.php'><br>Logout</a>";

?>








