<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Core rights";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["query"])) {
    $search = "%" . $_POST["query"] . "%";

    $sql = "SELECT 
                CONCAT(U_F_Name, ' ', U_L_Name) AS full_name, 
                CASE 
                    WHEN AD_ID IS NOT NULL THEN 'Admin' 
                    WHEN VLN_ID IS NOT NULL THEN 'Volunteer' 
                    WHEN MIN_ID IS NOT NULL THEN 'Ministry' 
                    WHEN REP_ID IS NOT NULL THEN 'Representative' 
                    ELSE 'Unknown' 
                END AS user_type
            FROM user_data 
            WHERE CONCAT(U_F_Name, ' ', U_L_Name) LIKE ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $search);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='search_item'>
                        <br>
                        <div> <h1>" . $row["full_name"] . "</h1></div> 
                        <div> <p1>".$row["user_type"]."</p1> </div>
                      </div>
                      ";
            }
        } else {
            echo "<div>No results found</div>";
        }

        $stmt->close();
    } else {
        echo "<div>Failed to prepare query</div>";
    }
}

// Close the connection
$conn->close();
?>
