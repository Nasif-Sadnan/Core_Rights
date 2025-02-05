<?php
include '../Modle/Min_List.php'; 
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/style_Minlist.css">
</head>
<body>
    <div class="container">
        <h2>Ministry Officials</h2>
        <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Ministry</th>
                </tr>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr class ="dt_TR">
                        <td><?= $row['U_F_Name']; ?></td>
                        <td><?= $row['U_L_Name']; ?></td>
                        <td><?= $row['U_email']; ?></td>
                        <td><?= $row['Ministry']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
