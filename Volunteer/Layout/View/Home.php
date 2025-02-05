<html>
<head>
    <link rel="stylesheet" href="../CSS/style.css?v=<?php echo time() ?>">
    <!-- Icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" /> 
</head>
<body>
    <div class="main">
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><img class="L_image" src="../Images/Core_Rights_W.png"></div>
                
                <div class="search">
                    <span class="search-icon material-symbols-outlined">search</span>
                    <input id="searchInput" class="search_input" type="search" placeholder="Search">
                    <div id="searchResults" class="search_results"></div> <!-- Results container -->
                </div>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <button type="button"><a href="../View/L_options.php">Login</a></button>
                </ul>
            </div>
        </nav>
        
        
        <div class="Title">Connecting People, Solving Problems: <br>Anytime, Anywhere</div>
        <div class="titleborder">
            <div class="Title2">To deny people their human rights <br> is to challenge their very humanity.</div>
        </div>
        <div class="nelname">-Nelson Mendela</div>

        <div class="ser_cat">
            <div class="health">
                <i class="icon fa-solid fa-briefcase-medical"></i>
                <p>Health care services</p>
            </div>

            <div class="l_aid">
                <i class="icon fa-solid fa-scale-balanced"></i>
                <p>Legal aid</p>
            </div>

            <div class="H_Shelter">
                <i class="icon fa-solid fa-house"></i>
                <p>Housing and shelter</p>
            </div>

            <div class="Education">
                <i class="icon fa-solid fa-graduation-cap"></i>
                <p>Education</p>
            </div>

            <div class="F_assistance">
                <i class="icon fa-solid fa-sack-dollar"></i>
                <p>Financial assistance</p>
            </div>

        </div>




        
    </div>
    <div class="HelperSection">
            <div class="min-PART">
                <div class="ministry" id="ministryBtn">
                    Ministry
                </div>
                <div class="rep">
                    Representitive
                </div>
            </div>
            <div class="vol">
                    Volunteer
            </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../JS/script.js"></script>
</body>
</html>
