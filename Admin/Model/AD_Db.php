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

    function addUser($conObj, $table, $email, $dob, $gender, $L_Name, $F_Name,$Phone,$password,$cv,$propic) {
        $querystring = "INSERT INTO $table 
                        (AD_Pass,AD_CV) 
                        VALUES (?,?)";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "is", 
            $password,
            $cv
            
        );

        $stmt->execute();


        $AD_ID = $conObj->insert_id;
        $stmt->close();
    
        $queryUser = "INSERT INTO user_data 
                      (AD_ID, U_Email, U_DOB, U_Gender,	U_L_Name, U_F_Name, U_Contact_No,U_Image) 
                      VALUES (?, ?, ?, ?, ?, ?, ?,?)";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing user_data query: " . $conObj->error);
        }
        $stmtUser->bind_param(
            "isssssis", 
            $AD_ID,    
            $email,    
            $dob,      
            $gender,   
            $L_Name,   
            $F_Name,   
            $Phone,
            $propic    
        );

        $result = $stmtUser->execute();

        $stmtUser->close();

        return $result;
    }

    function loginUser($conObj, $table,$id, $password) {
        $querystring = "SELECT * FROM $table 
                        WHERE AD_ID = ? AND AD_Pass = ?";
        
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
    
        return $result->num_rows > 0; 
    }
    

    function getVictimsWithUserData($conObj) {
        $querystring = "SELECT victim.*, user_data.U_Email, user_data.U_DOB, user_data.U_Gender, user_data.U_L_Name, user_data.U_F_Name, user_data.U_Contact_No FROM victim LEFT JOIN user_data ON victim.VIC_ID = user_data.VIC_ID";
        $result = $conObj->query($querystring);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
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
