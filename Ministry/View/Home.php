<?php
    session_start();

    if(!isset($_SESSION["MIN_id"]))
    {
        header("location: login.php");
    }
    $userID = $_SESSION["MIN_id"];
    include '../Control/view_User.php'; 
?>

<html>
<head>
    <link rel="stylesheet" href="../CSS/style_MIN_Home.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" /> 
    
</head>
<body>
<nav class="navbar">
              <div class="navdiv">
                  <div class="logo"><img class="L_image" src="../../Layout/Images/Core_Rights_B.png"></div>

                  <div class="search">
                      <span class="search-icon material-symbols-outlined">search</span>
                      <input class="search-input" type="search" placeholder="Search">
                  </div>

                  <ul>
                      <li><a href="#">Home</a></li>
                  </ul>
              </div>
    </nav>


<div class="Home_page">
    <div class="left-section">
      <div class="profile-pic">
        <img src="<?php echo $row['U_Image']; ?>" alt="User Profile Picture">
      </div>
      <div class="P_Name">
            <h1><?php  echo $row["U_F_Name"]." ".$row["U_L_Name"]; ?></h1>
      </div>
      <button class="profile-btn">Profile</button>
      <div class="stats">
        <div class="stat-item">
          <h2>42</h2>
          <p>Problems:</p>
        </div>
        <div class="stat-item">
          <h2>1302</h2>
          <p>Victims Worked With:</p>
        </div>
        <div class="stat-item">
          <h2>18</h2>
          <p>Ministries Works With:</p>
        </div>
      </div>
      <nav class="menu">
        <a href="#" onclick="ShowAbout()">About</a>
        <a href="#" onclick="ShowComplain()">Problems</a>
        <a href="#" onclick="ShowUser()">All User</a>
        <a href="#" onclick="ShowREP()">Representitive</a>
        <a href="../Control/Session_Destroy.php">logout</a>
      </nav>
    </div>

    
    <div class="middle-section">
      <div class="mid_pic">
        About
      </div>
      
      <?php include 'Home_about.php'; ?>
      <?php include '../Control/View_Representitive.php'; ?>
      

      
      
    </div>

  </div>
  
</div>




    
    

    <script src="../JS/JS_Home.js"></script>
</body>
</html>