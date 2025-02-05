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
                <td>First Name:</td>
                <td><?php echo $row["U_F_Name"]; ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $row["U_L_Name"]; ?></td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><?php echo $row["U_Contact_No"]; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo $row["U_Gender"]; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row["U_Email"]; ?></td>
            </tr>
            <tr>
                <td>User ID:</td>
                <td><?php echo $row["VIC_ID"]; ?></td>
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
            <tr>
                <td>Address:</td>
                <td><?php echo $row["U_Address"]; ?></td>
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
            <tr>
                <td>Front Picture of NID:</td>
                <td><img src="<?php echo $row["VIC_NID_Front"]; ?>" alt="User NID Front Picture" ></td>
            </tr>
            <tr>
                <td>Back Picture of NID:</td>
                <td><img src="<?php echo $row["VIC_NID_Back"]; ?>" alt="User NID Back Picture"></td>
            </tr>
        </table>

        <button onclick="Updatebtn()">Update</button>

    </div>
</body>

</html>
