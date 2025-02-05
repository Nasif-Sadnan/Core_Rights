<?php
include '../../Layout/Modle/REP_List_DB.php'; 
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/style_Minlist.css">
</head>
<body>
    <div class="REP_List" id="REP_List">
        <h2>Representitives</h2>
        <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Work catageory</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr class ="dt_TR_REP">
                        <td><?= $row['U_F_Name']; ?></td>
                        <td><?= $row['U_L_Name']; ?></td>
                        <td><?= $row['U_email']; ?></td>
                        <td><?= $row['REP_Work_Catageory']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
