<?php
include '../../Layout/Modle/Min_List.php'; 
?>

<html>
<head>
</head>
<body>
    <div class="Min_List" id="Min_List">
        <h2>Ministry Officials</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Ministry</th>
            </tr>
            <?php 
            foreach ($result as $row) { 
                echo "<tr class='dt_TR_Min'>
                        <td>" . $row['U_F_Name'] . "</td>
                        <td>" . $row['U_L_Name'] . "</td>
                        <td>" . $row['U_email'] . "</td>
                        <td>" . $row['Ministry'] . "</td>
                      </tr>";
            } 
            ?>
        </table>
    </div>
</body>
</html>
