<?php
        $conn = mysqli_connect('localhost','admin','adpassword');
        if(!$conn)
        {
              die("Could not connect:".mysqli_error());
        }
?>
