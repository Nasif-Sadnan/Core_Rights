<?php


include '../Model/REP_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->geUserwithData($conobj,$_SESSION["REP_ID"]);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
    }
} else {
    echo "No victims found";
}

$mydb->closeCon($conobj);
?>