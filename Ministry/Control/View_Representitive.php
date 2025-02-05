<?php
require_once '../Model/MIN_Db.php';

$mydb = new MyDB();
$conobj = $mydb->openCon();

$res = $mydb->GetREP_Data($conobj, $_SESSION["MIN_id"]);
$result = $res->fetch_all(MYSQLI_ASSOC);  

$mydb->closeCon($conobj);
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/MIB_List.css?v=<?php echo time() ?>">
</head>
<body>
    <div class="Min_List" id="Min_List">
        <h2>Ministry Officials</h2>
        <form action='../Control/Remove_Rep.php' method='post'>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        <?php
        if ($result && count($result) > 0) {
            foreach ($result as $row) { 
                echo "<tr class='dt_TR_Min'>
                        <td>" . $row['REP_ID'] . "</td>
                        <td>" . $row['U_F_Name'] . "</td>
                        <td>" . $row['U_L_Name'] . "</td>
                        <td>" . $row['U_Email'] . "</td>
                        <td>
                            <input type='hidden' name='MIN_id' value='" . $row['REP_ID'] . "' />
                            <input type='submit' value='Remove'>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td>No data available</td></tr>";
        }
        ?>
    </table>
</form>

<form action="Rep_Reg.php" method="get">
            <input type="submit" value="Add Representitive">
        </form>
    </div>
</body>
</html>
