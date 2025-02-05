<?php
//session_start();


include '../Model/CIV_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->getVictimsWithUserData($conobj,$_SESSION["VIC_ID"]);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
    }
} else {
    echo "No victims found";
}

$mydb->closeCon($conobj);
?>