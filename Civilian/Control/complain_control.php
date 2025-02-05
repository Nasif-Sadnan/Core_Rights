<?php
session_start();
include '../Model/CIV_Db.php';

$description = "";
$descriptionError = "";
$errors = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["description"])) {
        $descriptionError = "Description is required.";
    } else {
        $description = $_POST["description"]; 
        if (strlen($description) < 5) {
            $descriptionError = "Description must be at least 5 characters long.";
        } elseif (strlen($description) > 500) {
            $descriptionError = "Description must not exceed 500 characters.";
        }
    }


    if (!empty($_POST["COM_Time_Occured"])) {
        $dateParts = explode('-', $_POST["COM_Time_Occured"]);
        if (count($dateParts) == 3 && checkdate((int)$dateParts[1], (int)$dateParts[2], (int)$dateParts[0])) {
            echo "Time occured " . $_POST["COM_Time_Occured"] . "<br>";
            $COM_Time_Occured = true;
        } else {
            echo "Please enter a valid date in the format YYYY-MM-DD.<br>";
            $errors["COM_Time_Occured"] = "Invalid";
        }
    } else {
        echo "Please enter a valid date .<br>";
        $errors["COM_Time_Occured"] = "Invalid";
    }

    $victimName = $_POST['COM_Victim'];
 
    if (empty($victimName)) {
        $errors[] = "Victim name is required.";
    } else { 
        if (!preg_match("/^[a-zA-Z\s]+$/", $victimName)) {
            $errors[] = "Victim name can only contain letters and spaces.";
        }
    }


    $opponentName = $_POST['COM_Opponent'];
 
    if (empty($opponentName)) {
        $errors[] = "Opponent name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $opponentName)) {
        $errors[] = "Opponent name can only contain letters and spaces.";
    } elseif (strlen($opponentName) > 50) {
        $errors[] = "Opponent name must not exceed 50 characters.";
    }


    $place = $_POST['COM_Place'];
 
    if (empty($place)) {
        $errors[] = "Place of the occurrence is required.";
    } 
    elseif (strlen($place) < 5) {
        $errors[] = "Place of the occurrence atleast 5 characters long.";
    } 

 
    if ($_POST["COM_Division"] == "none") {
        $errors[] = "Please select a valid division.";
    }
 
    if ($_POST["COM_District"] == "none") {
        $errors[] = "Please select a valid district.";
    }

    $db = new mydb();
    $con = $db->openCon();
    $result = $db->submitcase(
        $con,
        $_SESSION["VIC_ID"],
        $_POST['description'],
        $_POST['COM_Time_Occured'],
        $_POST["COM_Victim"],
        $_POST["COM_Opponent"],
        $_POST["COM_Place"],
        $_POST["COM_Division"],
        $_POST["COM_District"]
    );
    if ($result) {
        echo "submitted";
    } else {
        echo "Database Error: " . $con->error;
    }
    $db->closeCon($con);

}
?>
