<?php


include '../Model/VLN_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->getVolunteerWithUserData($conobj,$_SESSION["VLN_ID"]);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
    }
} else {
    echo "No Volunteer found";
}


?>