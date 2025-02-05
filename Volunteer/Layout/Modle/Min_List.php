<?php
$host = "localhost"; // Change if using another server
$user = "root"; // Your DB username
$pass = ""; // Your DB password
$dbname = "Core rights"; // Replace with actual DB name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT U_F_Name, U_L_Name, U_email, Ministry FROM user_data 
          JOIN Ministry ON user_data.MIN_ID = Ministry.MIN_ID";

$result = $conn->query($query);

?>
