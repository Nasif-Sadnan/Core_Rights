<html>
<head>

</head>
<body>
<div class="about" id="About">
        <table>
            <tr>
                <th>Personal Information <br></th>
            </tr>
            <tr>
                <td>Officials First Name:</td>
                <td><?php echo $row["U_F_Name"]; ?></td>
            </tr>
            <tr>
                <td>Officials Last Name:</td>
                <td><?php echo $row["U_L_Name"]; ?></td>
            </tr>
            <tr>
                <td>Officials Contact Number:</td>
                <td><?php echo $row["U_Contact_No"]; ?></td>
            </tr>
            <tr>
                <td>Officials Gender:</td>
                <td><?php echo $row["U_Gender"]; ?></td>
            </tr>
            <tr>
                <td>Officials Email:</td>
                <td><?php echo $row["U_Email"]; ?></td>
            </tr>
            <tr>
                <td>Officials Ministry ID:</td>
                <td><?php echo $row["MIN_ID"]; ?></td>
            </tr>
        </table>


        <table>
          <tr>
                <th>Address</th>
            </tr>
            <tr>
                <td>Division:</td>
                <td><?php echo $row["U_Division"]; ?></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><?php echo $row["U_District"]; ?></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>NID Information</th>
            </tr>
            <tr>
                <td>NID Number:</td>
                <td><?php echo $row["U_NID"]; ?></td>
            </tr>
        </table>


    </div>
</body>

</html>
