<?php
    session_start();

    if(!isset($_SESSION["VIC_ID"]))
    {
        header("location: login.php");
    }
    $userID = $_SESSION["VIC_ID"];
    include '../Control/View_User.php'; 
?>
<html>
<head>
  <link rel="stylesheet" href="../CSS/style_VIC_Home.css?v=<?php echo time() ?>">
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
          <p>Problems Submitted:</p>
        </div>
        <div class="stat-item">
          <h2>1302</h2>
          <p>Volunteers Worked With:</p>
        </div>
        <div class="stat-item">
          <h2>18</h2>
          <p>Ministries Taken Service From:</p>
        </div>
      </div>
      <nav class="menu">
        <a href="#" onclick="ShowAbout()">About</a>
        <a href="#" onclick="ShowComplain()">Submit a Problem</a>
        <a href="#" onclick="ShowMin()">Ministry</a>
        <a href="#" onclick="ShowVLN()">Volunteers</a>
        <a href="#" onclick="ShowREP()">Representatives</a>
        <a href="../Control/Session_Destroy.php">logout</a>
      </nav>
    </div>

    <!-- Middle Section -->
    
    <div class="middle-section">
      <div class="mid_pic">
        About
      </div>
      
      <?php include 'Home_about.php'; ?>
      
      <?php include 'Home_Complain.php'; ?>

      <?php include 'Home_Min_List.php'; ?>
      

      
      
    </div>

  </div>
  
</div>


<script src="../JS/CIV_Home.js"></script>
</body>
</html>