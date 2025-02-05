<html >
<head>
    <title>Ministry Registration</title>
    <link rel="stylesheet" href="../CSS/style_Reg_Min.css">
</head>
<body>
    <div class="ministry-container">
        <div class="ministry-form-left">
            <img src="../Images/Ministry_Reg.jpg" class="ministry-reg" alt="Ministry Registration">
        </div>
        <div class="ministry-form-container">
            <h1 class="ministry-page-title">Ministry Official's Registration</h1>
            <form action="../Control/registration_ministry_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                <table>
                    <tr>
                        <td><h4>Official's First Name:</h4></td>
                        <td><h4><input type="text" name="Min_Firstname" id="Min_Firstname"></h4></td>
                        <td><h4 id="firsterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Official's Last Name:</h4></td>
                        <td><h4><input type="text" name="Min_Lastname" id="Min_Lastname"></h4></td>
                        <td><h4 id="lasterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Password:</h4></td>
                        <td><h4><input type="password" name="MIN_password" id="MIN_password">
                        <input type="checkbox" onclick="Show_Pass()"> Show Password</h4></td>
                        <td><h4 id="passerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Ministry Name:</h4></td>
                        <td><h4>
                            <select name="Ministry" id="Ministry">
                                <option value="None">None</option>
                                <option value="Ministry of Women and Child Affairs">Ministry of Women and Child Affairs</option>
                                <option value="Ministry of Land">Ministry of Land</option>
                                <option value="Ministry of Education">Ministry of Education</option>
                                <option value="Ministry of Health">Ministry of Health</option>
                                <option value="Ministry of Law">Ministry of Law</option>
                                <option value="Ministry of Food">Ministry of Food</option>
                                <option value="Ministry of Public Works">Ministry of Public Works</option>
                            </select>
                        </h4></td>
                        <td><h4 id="nameerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Gender:</h4></td>
                        <td><h4>
                            <input type="radio" name="Min_gender" value="Male">Male
                            <input type="radio" name="Min_gender" value="Female">Female
                            <input type="radio" name="Min_gender" value="Others">Others
                        </h4></td>
                        <td><h4 id="genderError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Email:</h4></td>
                        <td><h4><input type="email" name="Min_email" id="Min_email"></h4></td>
                        <td><h4 id="emailerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>Date of Birth:</h4></td>
                        <td><h4><input type="date" name="Min_dob" id="Min_dob"></h4></td>
                        <td><h4 id="dateError"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>NID:</h4></td>
                        <td><h4><input type="number" name="Min_nid" id="Min_nid"></h4></td>
                        <td><h4 id="niderror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>NID Front:</h4></td>
                        <td><h4><input type="file" name="MIN_NID_front" id="MIN_NID_front" accept=".jpg, .png, .jpeg"></h4></td>
                        <td><h4 id="fronterror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>NID Back:</h4></td>
                        <td><h4><input type="file" name="MIN_NID_Back" id="MIN_NID_Back" accept=".jpg, .png, .jpeg"></h4></td>
                        <td><h4 id="backerror"></h4></td>
                    </tr>
                    <tr>
                        <td><h4>User Picture:</h4></td>
                        <td><h4><input type="file" name="MIN_userpic" id="MIN_userpic" accept=".jpg, .png, .jpeg"></h4></td>
                        <td><h4 id="picerror"></h4></td>
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
    <script src="../JS/myjs.js"></script>
</body>
</html>