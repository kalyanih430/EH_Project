<?php

session_start();

echo "Login Successfull !! Welcome ".$_SESSION['Username'];
echo "<a href='logout.php'><br>logout</a>";


?>
