<?php
include '../Model/VLN_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->getuserbylike($conobj,$_POST['search']);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
        echo "User ID : ".$row["VIC_ID"]."<br>";
        echo "User NID Front Pic : "."<img src='".$row["VIC_NID_Front"] ."' width=80>";
        echo "User NID Front Pic : "."<img src='".$row["VIC_NID_Back"] ."' width=80>"."<br>";
        echo $row["VIC_Allow_Profile_Pic"];
        echo $row["VIC_Temp_Profile_Pic"];

        echo "Email: " .$row["U_Email"] ."<br>";
        echo "DOB: " . $row["U_DOB"]."<br>" ;
        echo "Gender: " . $row["U_Gender"] ."<br>" ;
        echo "Last Name: " . $row["U_L_Name"] ."<br>";
        echo "First Name: " .$row["U_F_Name"] ."<br>";
        echo "Contact: " . $row["U_Contact_No"] ."<br>";

        echo "<br>";
        echo "<br>";
    }
    
} 


    
else 
{
    echo "No victims found";
}

$mydb->closeCon($conobj);
?>