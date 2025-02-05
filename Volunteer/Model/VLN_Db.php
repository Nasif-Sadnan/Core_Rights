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

    
    function addUser($conObj, $table,$VLN_email, $VLN_dob, $VLN_Gender, $VLN_Lastname, $VLN_Firstname,$VLN_pass, $VLN_NID,$VLN_phone,$VLN_Work,$VLN_Division,$VLN_District,$VLN_cv,$VLN_pic) 
    {
        $querystring = "INSERT INTO $table 
                        (VLN_CV, VLN_Work_Time, VLN_Pass) 
                        VALUES (?,?,?)";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "sss", 
            $VLN_cv,
            $VLN_Work,
            $VLN_pass
        );

        $stmt->execute();
        $VLN_ID = $conObj->insert_id;

        $stmt->close();

        $queryUser = "INSERT INTO user_data 
        (VLN_ID, U_Email, U_DOB, U_Gender, U_L_Name, U_F_Name, U_Contact_No,U_Division, U_District,U_NID,U_Image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing user_data query: " . $conObj->error);
        }
        
        $stmtUser->bind_param(
            "isssssissis",
            $VLN_ID, 
            $VLN_email, 
            $VLN_dob, 
            $VLN_Gender, 
            $VLN_Lastname,
            $VLN_Firstname,
            $VLN_phone,
            $VLN_Division,
            $VLN_District,
            $VLN_NID,
            $VLN_pic
                // Phone number
            );

            $result = $stmtUser->execute();

            $stmtUser->close();
            return $result;
    }

    function loginUser($conObj, $table,$id, $password) {
        $querystring = "SELECT * FROM $table
                        WHERE VLN_ID = ? AND VLN_Pass=?";
       
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
    
    function getVolunteerWithUserData($conObj, $userid) {
        $querystring = "SELECT volunteer.*, user_data.*
                        FROM volunteer 
                        LEFT JOIN user_data ON volunteer.VLN_ID = user_data.VLN_ID 
                        WHERE volunteer.VLN_ID = ?";
    
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
    
    function Get_Limited_Data($conObj) {
        $querystring = "SELECT victim.*, user_data.U_Email, user_data.U_DOB, user_data.U_Gender, user_data.U_L_Name, user_data.U_F_Name, user_data.U_Contact_No 
        FROM victim 
        LEFT JOIN user_data ON victim.VIC_ID = user_data.VIC_ID 
        ORDER BY victim.VIC_ID, user_data.U_L_Name 
        LIMIT 10";
        
        $result = $conObj->query($querystring);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }
    
    function getuserbylike($conObj,$search) 
    {
        
        $querystring = "SELECT victim.*, user_data.U_Email, user_data.U_DOB, user_data.U_Gender, user_data.U_L_Name, user_data.U_F_Name, user_data.U_Contact_No 
        FROM victim 
        LEFT JOIN user_data ON victim.VIC_ID = user_data.VIC_ID                   
        WHERE victim.VIC_ID LIKE ?";         
        $stmt = $conObj->prepare($querystring);     
        if (!$stmt) 
        {         
            die("Error preparing query: " . $conObj->error);    
         }     

         $stmt->bind_param("i", $search);     
         $stmt->execute();     
         $result = $stmt->get_result(); 
         $stmt->close(); 
         return $result;
    }
    function closeCon($conObj) {
        $conObj->close();
    }
    }
?>
