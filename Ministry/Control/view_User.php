<?php
//session_start();


include '../Model/MIN_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->getuserWithUserData($conobj,$_SESSION["MIN_id"]);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
    }
} else {
    echo "No victims found";
}

$mydb->closeCon($conobj);
?>