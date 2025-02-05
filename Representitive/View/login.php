<?php
    session_start();

    if(isset($_SESSION["REP_ID"]))
    {
        header("location: Home.php");
    }
?>
<html>
<head>
    <link rel="stylesheet"  href="../CSS/style_REP_Login.css">
</head>
<body>

    <div class="container">
        <div class="left-section">
            <div class="Representative">
                <h1>Representative</h1>
                <p>Login to manage services and user issues</p>
            </div>    
        </div>
        <div class="right-section">
            <h2>Welcome</h2>
            <form action="../Control/login_representative_control.php" method="post" onsubmit="return validation()">
                <div>Representative ID:</div>
                <input type="text" name="REP_ID" id="REP_ID" placeholder="Enter your ID">
                <span id="iderror"></span>

                <div>Password:</div>
                <input type="password" name="REP_password" id="REP_password" placeholder="Enter your password">
                <span id="iderror"></span>
                <input type="checkbox" onclick="Show_Pass()"> Show Password

                <button type="submit">Login</button>
                <button type="reset" class="reset-btn">Reset</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="Registration.php">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="../JS/rep_login.js"></script>
</body>
</html>
