<?php
session_start();
require_once '../Model/MIN_Db.php';


    $REP_ID = $_POST["MIN_id"];
    $mydb = new mydb();
    $conobj = $mydb->openCon();
    $result = $mydb->removeRepresentative($conobj, $REP_ID);

    if ($result) {
        header("Location: ../View/Home.php");
    } else {
        echo "Error removing representative.";
    }

    $mydb->closeCon($conobj);
?>
