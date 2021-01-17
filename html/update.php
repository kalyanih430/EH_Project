<?php
session_start();

$conn = mysqli_connect('localhost','admin','adpassword','EH_Project');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }

?>
<html>
<head>
<style>

		body {
			display: inline-block;
			text-align: right;
 			background-image: url("https://image.freepik.com/free-photo/arrangement-with-pink-flowers-white-vase_23-2148442372.jpg");
  			height: 100%;
			background-position: center;
 		        background-repeat: no-repeat;
  			background-size: cover;

			}

		input {
			width:40%;
			height:5%;
			border:5px;
			border-radius:5px;
			padding:8px; 15px 8px 15px;
			margin:10px 0px 15px 0px;
			box-shadow:1px 1px 2px 1px grey;
			}
</style>
</head>
<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnX4zTSgAHVNwM7OprPMu1byc_QWcd5LmEOA&usqp=CAU">
<body>
			
		<form method='POST' action='updated.php'>
		<label for ="Username"><b>Username:<b></label>
		<input type= "text" name= "Username" placeholder ="Enter Username" id="Username"required><br>
		<label for "Email"><b>Email:<b></label>
		<input type= "email" name="Email" placeholder="Enter Email" id="Email"required><br>
		<label><b>Password :</b></label>
	        <input name="password" id="password" placeholder="Enter Password" type="password" required></b><br>

	        <label><b>Confirm Password :</b>
	        <input name="cpassword" id="cpassword" placeholder="Renter Password" type="password" required></b><br><br>

		<input type= "submit" name="Update"value="Update">
		</form>

		<form action="csrf.php" method="POST">
		 <input type="submit" value="View my details"/>
		   <a href='logout.php'><br><b>Logout<b></a>
		 </form>


</body>

</html>


