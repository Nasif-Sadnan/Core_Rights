<?php
    session_start();

    if(isset($_SESSION["VIC_ID"]))
    {
        header("location: Home.php");
    }
?>

<html>
<head>
    <title>Civilian Login</title>
    <link rel="stylesheet"  href="../CSS/style_VIC_Login.css">
</head>
<body>

    <div class="container">
        <div class="left-section">
            <div class="User">
                <h1>User</h1>
                <p>Login to submit your problem or take services</p>
            </div>    
        </div>
        <div class="right-section">
            <h2>Welcome</h2>
            <form action="../Control/login_civilian_control.php" method="post" onsubmit="return validation()">
                <div>User ID:</div>
                <input type="text" name="VIC_ID" id="VIC_ID" placeholder="Enter your ID">
                <span id="iderror"></span>

                <div>Password:</div>
                <input type="password" name="VIC_password" id="VIC_password" placeholder="Enter your password">
                <span id="passerror"></span>
                <input type="checkbox" onclick="Show_Pass()"> Show Password</h4></td>
                

                <button type="submit">Login</button>
                <button type="reset" class="reset-btn">Reset</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="registration.php">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="../JS/civ_login.js"></script>
</body>
</html>
