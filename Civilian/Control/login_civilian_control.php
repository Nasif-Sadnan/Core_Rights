<?php session_start();?> 

<html>
    <head>
        <title>Login control Panel</title></head>
        <?php include '../Model/CIV_Db.php';?>
 
    <body>
        <?php
       
        $db = new mydb();
        $con = $db->openCon();
 
 
        $result = $db->loginUser(
            $con,
            'victim',
            $_POST["VIC_ID"],
            $_POST["VIC_password"]
        );
 
        if ($result && $result->num_rows > 0) {

            $user = $result->fetch_assoc();

            $_SESSION["VIC_ID"]=$user["VIC_ID"];
            header("Location: ../View/Home.php"); // Redirect to success page
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }
 
        $db->closeCon($con);        
    ?>
 
 
    </body>