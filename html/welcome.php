<?php

session_start();

echo "Login Successfull !! Welcome ".$_SESSION['Username'];
echo "<a href='logout.php'><br>logout</a>";
?>

<html>
    <body>
        <form action="post_comment.php" method="post">
            <input type="submit" name="submit button" value="Enter Comments"/>
        </form>
    </body>
</html>




