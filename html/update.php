<html>
<head>
<style>

		body {
			display: inline-block;
			text-align: right;
 			background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-watercolor-color-city-background-design-backgroundcity-backgroundbackground-materialcivilizationgreen-image_70171.jpg	");
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
</body>

</html>


