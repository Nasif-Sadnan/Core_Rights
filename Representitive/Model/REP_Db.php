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

    function addUser($conObj, $table, $REP_email,$pass, $REP_dob, $REP_Gender, $REP_Lastname, $REP_Firstname, $REP_NID, $REP_Division, $REP_District,$REP_phone, $working_catagory, $REP_img, $REP_CV) 
    {
        $querystring = "INSERT INTO $table 
                        (REP_CV, REP_Work_Catageory,REP_Pass) 
                        VALUES (?, ?,?)";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "sss", 
            $REP_CV,
            $working_catagory,
            $pass
        );

        $stmt->execute();
        $REP_ID = $conObj->insert_id;

        $stmt->close();

        $queryUser = "INSERT INTO user_data
        (REP_ID, U_Email, U_DOB, U_Gender, U_L_Name, U_F_Name, U_Contact_No,U_Division, U_District,U_NID,U_Image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?)";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing representative_data query: " . $conObj->error);
        }
        
        $stmtUser->bind_param(
            "isssssissis",
            $REP_ID, 
            $REP_email, 
            $REP_dob,
            $REP_Gender, 
            $REP_Lastname, 
            $REP_Firstname,
            $REP_phone,
            $REP_Division, 
            $REP_District,
            $REP_NID,
            $REP_img
        );

        $result = $stmtUser->execute();

        $stmtUser->close();
        return $result;
    }

    function loginUser($conObj, $table,$id, $password) {
        $querystring = "SELECT * FROM $table
                        WHERE REP_ID = ?  AND REP_Pass = ?";
       
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
   
        if ($result->num_rows > 0) {
            return $result; 
        } else {
            return null; 
        }
    }
    function geUserwithData($conObj, $userid) {
        $querystring = "SELECT representitive.*, user_data.*
                        FROM representitive 
                        LEFT JOIN user_data ON representitive.REP_ID = user_data.REP_ID 
                        WHERE representitive.REP_ID = ?";
    
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

    function closeCon($conObj) {
        $conObj->close();
    }
}
