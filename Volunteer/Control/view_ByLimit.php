<?php
require_once '../Model/VLN_Db.php';

$mydb = new mydb();
$conobj = $mydb->openCon();
$result = $mydb->Get_Limited_Data($conobj);
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/user_list.css?v=<?php echo time() ?>">
</head>
<body>

<div class="VLN_Container">
    <h2>Victim Information</h2>

    <?php 
    if ($result && $result->num_rows > 0) {
        foreach ($result as $row) { ?>
            <div class="victim-info">
                <p>User ID: <?php echo $row["VIC_ID"]; ?></p>
                <p>Email: <?php echo $row["U_Email"]; ?></p>
                <p>DOB: <?php echo $row["U_DOB"]; ?></p>
                <p>Gender:  <?php echo $row["U_Gender"]; ?></p>
                <p>First Name:  <?php echo $row["U_F_Name"]; ?></p>
                <p>Last Name: <?php echo $row["U_L_Name"]; ?></p>
                <p>Contact:  <?php echo $row["U_Contact_No"]; ?></p>
                <p>NID Front:  <img src="<?php echo $row['VIC_NID_Front']; ?>" width="80"></p>
                <p>NID Back:  <img src="<?php echo $row['VIC_NID_Back']; ?>" width="80"></p>
            </div>
        <?php 
        }
    } else {
        echo "<p>No victims found</p>";
    }
    ?>

</div>

</body>
</html>
