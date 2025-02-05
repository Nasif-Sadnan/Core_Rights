<html>
<head>
</head>
<body>
    <form method="POST" action=" ">
        <input type="submit" name="view_users" value="View Users"><br>
       
         
    </form>

    <form method="POST" action="../Control/show_user.php">
       
    Search by ID: <input type="text" name="search">
    <button type="submit" name="view_like">View by LIKE (ID)</button>
         
    </form>
    
    <form action="../Control/View_Limit.php" method="get">
        <input type="submit" value="View Limited User">
    </form>

    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['view_users'])) {
            include '../Control/View_User.php';
        }
        ?>


    </div>
</body>
</html>
