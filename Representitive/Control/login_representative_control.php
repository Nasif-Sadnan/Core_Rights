<?php session_start();?> 
<html>
    <head>
        <title>Registration control Panel</title></head>
        <?php include '../Model/REP_Db.php';?>
 
    <body>
        <?php
       
        $db = new mydb();
        $con = $db->openCon();
 
 
        $result = $db->loginUser(
            $con,
            'representitive',
            $_POST["REP_ID"],
            $_POST["REP_password"]
        );
 
        if ($result && $result->num_rows > 0) {

            $user = $result->fetch_assoc();

            $_SESSION["REP_ID"]=$user["REP_ID"];
            header("Location: ../View/Home.php"); 
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }
        $db->closeCon($con);        
    ?>
 
 
    </body>