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
                <td><?php echo $row["VLN_ID"]; ?></td>
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
            <tr>
                <td>Volunteer Work Time:</td>
                <td><<?php echo $row["VLN_Work_Time"]; ?>></td>
            </tr>
           
        </table>

        <button> Edit</button>
      </div>
</body>

</html>
