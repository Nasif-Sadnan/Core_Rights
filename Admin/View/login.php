<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../CSS/style_LOG_AD.css">
</head>
<body>
    <div class="admin-container">
      
        <div class="admin-left-section">
            <div class="Admin">
                <h1>Admin</h1>
                <p>Login to manage the system</p>
            </div>    
        </div>

 
        <div class="admin-right-section">
            <h2>Welcome</h2>
            <form action="../Control/Login_Control.php" method="post" onsubmit="return validation()">
                <div>Admin ID:</div>
                <input type="text" name="AD_ID" id="AD_ID" placeholder="Enter your Admin ID">
                <span id="iderror"></span>

                <div>Password:</div>
                <input type="password" name="AD_password" id="AD_password" placeholder="Enter your password">
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

    <script src="../JS/ad_login.js"></script>
</body>
</html>
