<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "Core rights"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT U_F_Name, U_L_Name, U_email, VLN_Work_Time FROM user_data 
          JOIN volunteer ON user_data.VLN_ID = volunteer.VLN_ID";

$result = $conn->query($query);

?>
