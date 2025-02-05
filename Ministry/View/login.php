<?php
    session_start();

    if(isset($_SESSION["MIN_id"]))
    {
        header("location: Home.php");
    }
?>

<html>
    <head>
        <title>Ministry Login</title>
        <link rel="stylesheet" href="../CSS/style_Login_MIN.css">
    </head>

    <body>
        <div class="ministry-container">
            <div class="ministry-left-section">
                <div class="Ministry">
                    <h1>Ministry</h1>
                    <p>Login to manage the system</p>
                </div>    
            </div>

            <div class="ministry-right-section">
                <h2>Welcome</h2>
                <form action="../Control/Login_Control.php" method="post" onsubmit="return validation()">
                    <div>Ministry Official's ID:</div>
                    <input type="text" name="MIN_id" id="MIN_id" placeholder="Enter your Ministry ID">
                    <span id="iderror"></span>

                    <div>Password:</div>
                    <input type="password" name="MIN_password" id="MIN_password" placeholder="Enter your password">
                    <span id="passworderror"></span>

                    <input type="checkbox" onclick="Show_Pass()"> Show Password</h4></td>

                    <button type="submit">Login</button>
                    <button type="reset" class="reset-btn">Reset</button>

                    <div class="register-link">
                        <p>Don't have an account? <a href="Registration.php">Register Now</a></p>
                    </div>
                </form>
            </div>
        </div>

        <script src="../JS/ministry_login.js"></script>
    </body>
</html>