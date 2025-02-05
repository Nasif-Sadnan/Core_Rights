<html>
    <head>
        <title>Registration control Panel</title></head>
        <?php include '../Model/AD_Db.php';?>

    <body>
        <?php 
        
        $db = new mydb();
        $con = $db->openCon();


        $result = $db->loginUser(
            $con,
            'admin',
            $_POST["AD_ID"],
            $_POST["AD_password"]
        );

        if ($result) {
            header("Location: ../View/Home.php"); // Redirect to success page
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }

        $db->closeCon($con);        
    ?>


    </body>


</html>