<?php
    session_start();
 
    if(isset($_SESSION["VLN_ID"]))
    {
        header("location: Home.php");
    }
?>
<html>
    <head>
        <title> Volunteer Login </title>
        <link rel="stylesheet"  href="../CSS/style_VLN_LOG.css">
    </head>

    <body>
        <div class="container">
            <div class="left-section">
                <div class="Volunteer">
                    <h1>Volunteer</h1>
                    <p>Login to manage services and user issues</p>
                </div>    
            </div>
            <div class="right-section">
                <h2>Welcome</h2>
                <form action="../Control/login_volunteer_control.php" method="post" onsubmit="return validation()">
                    <div>Volunteer ID:</div>
                    <input type="text" name="VLN_ID" id="VLN_ID" placeholder="Enter your ID">
                    <span id="iderror"></span>

                    <div>Password:</div>
                    <input type="password" name="VLN_password" id="VLN_password" placeholder="Enter your password">
                    <span id="passerror"></span>
                    <input type="checkbox" onclick="Show_Pass()"> Show Password

                    <button type="submit">Login</button>
                    <button type="reset" class="reset-btn">Reset</button>

                    <div class="register-link">
                        <p>Don't have an account? <a href="Registration.php">Register Now</a></p>
                    </div>
                </form>
            </div>
        </div>

        <script src="../JS/volunteer_login.js"></script>
    </body>
</html>