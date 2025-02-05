<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "Core rights"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT U_F_Name, U_L_Name, U_email, REP_Work_Catageory FROM user_data 
          JOIN representitive ON user_data.REP_ID = representitive.REP_ID";

$result = $conn->query($query);

?>
