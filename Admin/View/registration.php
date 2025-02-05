<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="../CSS/style_Reg_AD.css">
</head>
<body>
    <div class="admin-container">
     
        <div class="admin-form-left">
            <img src="../Images/Admin_Reg.jpg" class="admin-reg" alt="Admin Registration">
        </div>

        
        <div class="admin-form-container">
            <h1 class="admin-page-title">Admin Registration</h1>
            <form action="../Control/registration_admin_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                <table>
                    <tr>
                        <td><h4>First Name:</h4></td>
                        <td><h4><input type="text" name="AD_Firstname" id="AD_Firstname"></h4></td>
                        <td><h4 id="firsterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Last Name:</h4></td>
                        <td><h4><input type="text" name="AD_Lastname" id="AD_Lastname"></h4></td>
                        <td><h4 id="lasterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Password:</h4></td>
                        <td><h4><input type="password" name="AD_password" id="AD_password">
                        <input type="checkbox" onclick="Show_Pass()"> Show Password</h4></td>
                        <td><h4 id="passworderror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Gender:</h4></td>
                        <td>
                            <h4>
                                <input type="radio" name="AD_Gender" value="Male">Male
                                <input type="radio" name="AD_Gender" value="Female">Female
                                <input type="radio" name="AD_Gender" value="Others">Others
                            </h4>
                        </td>
                        <td><h4 id="genderError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Date of Birth:</h4></td>
                        <td><h4><input type="date" name="AD_dob" id="AD_dob"></h4></td>
                        <td><h4 id="dateError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Mobile Number:</h4></td>
                        <td><h4><input type="tel" name="AD_phone" id="AD_phone"></h4></td>
                        <td><h4 id="phoneerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Email:</h4></td>
                        <td><h4><input type="email" name="AD_email" id="AD_email"></h4></td>
                        <td><h4 id="emailerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>CV:</h4></td>
                        <td><h4><input type="file" name="AD_cv" id="AD_cv" accept=".pdf"></h4></td>
                        <td><h4 id="fileerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Profile Picture:</h4></td>
                        <td><h4><input type="file" name="propic" id="propic" accept=".jpg, .png, .jpeg"></h4></td>
                        <td><h4 id="propicerror"></h4></td>
                    </tr>
                </table>

                
                <div class="buttons_container">
                    <input type="submit" name="submit" value="Register">
                    <input type="reset" value="Reset">
                </div>

                <div>
                    <h4><a href="login.php">Go to Login Page</a></h4>
                </div>
            </form>
        </div>
    </div>
    <script src="../JS/ad_reg.js"></script>
</body>
</html>
