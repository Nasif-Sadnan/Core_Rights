<?php
    session_start();

    if(!isset($_SESSION["Fname"]) && !isset($_SESSION["lname"]))
    {
        header("location: ../Volunteer/registration.php");
    }
    
?>

<html>
<body>
    hello <?php echo  $_SESSION["Fname"]. $_SESSION["lname"]; ?>
    <h4><a href="../Control/session_destroy.php">logout</a></h4>
</body>
</html>