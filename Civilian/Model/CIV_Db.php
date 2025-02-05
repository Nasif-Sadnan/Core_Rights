<?php

class mydb {
    function openCon() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "core rights"; 
        $conObj = new mysqli($servername, $username, $password, $dbname);

        if ($conObj->connect_error) {
            die("Connection failed: " . $conObj->connect_error);
        }

        return $conObj;
    }

    
    function addUser($conObj, $table,$pass,$allowPP,$CIV_email, $CIV_dob, $CIV_Gender, $CIV_Lastname, $CIV_Firstname,$CIV_NID,$CIV_phone,$CIV_address,$CIV_Division,$CIV_District,$CIV_NID_fornt,$CIV_NID_Back,$pr_Pic) 
    {
        $querystring = "INSERT INTO $table 
                        (VIC_NID_Front, VIC_NID_Back,VIC_Pass,VIC_Allow_Profile_Pic) 
                        VALUES (?,?,?,?)";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "ssss", 
            $CIV_NID_Back,
            $CIV_NID_fornt,
            $pass,
            $allowPP
        );
        
        
        $stmt->execute();
        $VIC_ID = $conObj->insert_id;
        $_SESSION["VIC_ID"]= $VIC_ID ;

        $stmt->close();

        $queryUser = "INSERT INTO user_data 
        (VIC_ID, U_Email, U_DOB, U_Gender, U_L_Name, U_F_Name, U_Contact_No,U_Division, U_District,U_Address,U_NID,U_Image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing user_data query: " . $conObj->error);
        }
        
        $stmtUser->bind_param(
            "isssssisssis",
            $VIC_ID, 
            $CIV_email, 
            $CIV_dob, 
            $CIV_Gender, 
            $CIV_Lastname,
            $CIV_Firstname,
            $CIV_phone,
            $CIV_Division,
            $CIV_District,
            $CIV_address,
            $CIV_NID,
            $pr_Pic
                
            );

            $result = $stmtUser->execute();

            $stmtUser->close();
            return $result;
            session_destroy();
    }

    function loginUser($conObj, $table,$id, $password) {
        $querystring = "SELECT * FROM $table
                        WHERE VIC_ID = ? AND VIC_Pass = ?";
       
        $stmt = $conObj->prepare($querystring);
   
        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }
   
        $stmt->bind_param(
            "is",
            $id,
            $password
       
        );
   
        $stmt->execute();
   
        $result = $stmt->get_result();
   
        $stmt->close();
   
        return $result;
    }
    
    function getVictimsWithUserData($conObj, $userid) {
        $querystring = "SELECT victim.*, user_data.*
                        FROM victim 
                        LEFT JOIN user_data ON victim.VIC_ID = user_data.VIC_ID 
                        WHERE victim.VIC_ID = ?";
    
        $stmt = $conObj->prepare($querystring);
        
        $stmt->bind_param("i", $userid);
    
        $stmt->execute();
        
        $result = $stmt->get_result();
    
        
        if ($result->num_rows > 0) {
            return $result; 
        } else {
            return null; 
        }
    
       
        $stmt->close();
    }
    

    function Update_User($UserID,$conObj, $table,$CIV_email, $CIV_dob, $CIV_Gender, $CIV_Lastname, $CIV_Firstname,$CIV_NID,$CIV_phone,$CIV_address,$CIV_Division,$CIV_District,$CIV_NID_fornt,$CIV_NID_Back) 
    {
        $querystring = "Update $table SET
                        VIC_NID_Front = ?, VIC_NID_Back = ? 
                        WHERE VIC_ID = ? ";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "ssi", 
            $CIV_NID_Back,
            $CIV_NID_fornt,
            $UserID

        );

        $stmt->execute();

        $stmt->close();

        $queryUser = "Update  user_data SET
        U_Email =?, U_DOB =?, U_Gender =?, U_L_Name =?, U_F_Name =?, U_Contact_No =?,U_Division =?, U_District =?,U_Address =?,U_NID =? 
        WHERE VIC_ID = ? ";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing user_data query: " . $conObj->error);
        }
        
        $stmtUser->bind_param(
            "sssssisssii", 
            $CIV_email, 
            $CIV_dob, 
            $CIV_Gender, 
            $CIV_Lastname,
            $CIV_Firstname,
            $CIV_phone,
            $CIV_Division,
            $CIV_District,
            $CIV_address,
            $CIV_NID,
            $UserID
            );

            $result = $stmtUser->execute();

            $stmtUser->close();
            return $result;
    }

    function submitcase($conObj,$VIC_ID,$description,$COM_Time_Occured,$COM_Victim,$COM_Opponent,$COM_Place,$COM_Division,$COM_District)
    {
        $db = new mydb();
        $con = $db->openCon();
        $VLN_ID=$db->getVLN($con);

        $querystring = "INSERT INTO complain 
                        (COM_Description, COM_Time_Occured,COM_Victim,COM_Opponent,COM_Place,COM_Division,COM_District,VIC_ID,VLN_ID,COM_Status) 
                        VALUES (?,?,?,?,?,?,?,?,?,?)";
        
        $stmt = $conObj->prepare($querystring);
        $status="COM_VLN_Pending";
        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "sssssssiis", 
            $description,
            $COM_Time_Occured,
            $COM_Victim,
            $COM_Opponent,
            $COM_Place,
            $COM_Division,
            $COM_District,
            $VIC_ID,
            $VLN_ID,
            $status
        );

        $result =$stmt->execute();

        return $result;
        $stmt->close();

    }

    function getVLN($conn) {
        $querystring = "SELECT VLN_ID FROM volunteer ORDER BY VLN_ID ASC";
        $stmt = $conn->prepare($querystring);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $minVLN = null;
        $minCount = PHP_INT_MAX;
        
        while ($row = $result->fetch_assoc()) {
            $vln_id = $row['VLN_ID'];
            
            $complaintQuery = "SELECT COUNT(*) AS complain_count FROM complain WHERE VLN_ID = ? AND COM_Status = 'COM_VLN_Pending'";
            $stmt2 = $conn->prepare($complaintQuery);
            $stmt2->bind_param("i", $vln_id);
            $stmt2->execute();
            $complaintResult = $stmt2->get_result();
            $complaintData = $complaintResult->fetch_assoc();
            $currentCount = $complaintData['complain_count'];
            
            $stmt2->close();
            
            if ($currentCount < $minCount) {
                $minCount = $currentCount;
                $minVLN = $vln_id;
            }
        }
        
        return $minVLN;
    }

    function closeCon($conObj) {
        $conObj->close();
    }
}
?>
