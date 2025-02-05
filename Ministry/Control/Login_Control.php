<?php session_start();?> 

<html>
    <head>
        <title>Registration control Panel</title></head>
        <?php include '../Model/MIN_Db.php';?>

    <body>
        <?php 
        
        $db = new mydb();
        $con = $db->openCon();


        $result = $db->loginUser(
            $con,
            'ministry',
            $_POST["MIN_id"]
        );

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            $_SESSION["MIN_id"]=$user["MIN_ID"];

            header("Location: ../View/Home.php"); 
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }

        $db->closeCon($con);        
    ?>


    </body>


</html>