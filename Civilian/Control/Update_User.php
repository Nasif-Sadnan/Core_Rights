<?php session_start();?> 

<html>
    <head>
        <title>Registration Control Panel</title>
    </head>
    <?php include '../Model/CIV_Db.php'; ?>
    <body>
        <?php
        echo $_SESSION["VIC_ID"];
        $db = new mydb();
        $con = $db->openCon();
        $result = $db->Update_User(
            $_SESSION["VIC_ID"],
            $con,
            'victim',
            $_POST["CIV_email"],
            $_POST["CIV_dob"],
            $_POST["CIV_Gender"],
            $_POST["CIV_Lastname"],
            $_POST["CIV_Firstname"],
            $_POST["CIV_NID"],
            $_POST["CIV_phone"],
            $_POST["address"],
            $_POST["Division"],
            $_POST["District"],
            $target_file1,
            $target_file
        );
        if ($result) {
            header("Location: ../View/Home.php");
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }
        $db->closeCon($con);
        ?>
    </body>
</html>
