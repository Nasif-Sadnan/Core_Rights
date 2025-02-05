<?php
include '../Modle/VLN_List_DB.php'; 
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/style_Minlist.css">
</head>
<body>
    <div class="VLN_Container">
        <h2>Volunteers</h2>
        <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Working time</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr class ="dt_TR_VLN">
                        <td><?= $row['U_F_Name']; ?></td>
                        <td><?= $row['U_L_Name']; ?></td>
                        <td><?= $row['U_email']; ?></td>
                        <td><?= $row['VLN_Work_Time']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
