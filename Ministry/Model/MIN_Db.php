<?php
class MyDB {
    
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

    
    function addUser($conObj, $table, $Min_email, $Min_dob, $Min_gender, $Min_Lastname, $Min_Firstname, $Min_nid, $Ministry,$Min_Pass, $MIN_NID_front, $MIN_NID_Back, $MIN_userpic) {
        
        $queryNID = "INSERT INTO $table (Ministry,MIN_Pass, Min_NID_front, MIN_NID_Back, MIN_userpic ) VALUES (?, ?, ?, ?,?)";
        $stmtNID = $conObj->prepare($queryNID);

        if (!$stmtNID) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmtNID->bind_param
        ("sssss", $Ministry ,$Min_Pass,$MIN_NID_front, $MIN_NID_Back, $MIN_userpic);
        $stmtNID->execute();
        $MIN_ID = $conObj->insert_id;
        $stmtNID->close();

        
        $queryUser = "INSERT INTO user_data (MIN_ID, U_Email, U_DOB, U_Gender, U_L_Name, U_F_Name, U_Contact_No,  U_NID) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtUser = $conObj->prepare($queryUser);

        if (!$stmtUser) {
            die("Error preparing user_data query: " . $conObj->error);
        }

        $stmtUser->bind_param("isssssii", $MIN_ID, $MIN_email, $Min_dob, $Min_gender, $Min_Lastname, $Min_Firstname, $Ministry, $Min_nid);
        $result = $stmtUser->execute();
        $stmtUser->close();

        return $result;
    }

    
    function loginUser($conObj, $table, $id) {
        $querystring = "SELECT * FROM $table WHERE MIN_ID = ? ";
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        return $result;
    }


    function addREP($MIN_ID,$conObj, $table, $REP_email, $REP_dob, $REP_Gender, $REP_Lastname, $REP_Firstname, $REP_NID, $REP_Division, $REP_District,$REP_phone, $working_catagory, $REP_img, $REP_CV) 
    {
        $querystring = "INSERT INTO $table 
                        (MIN_ID,REP_img, REP_CV, REP_Work_Catageory) 
                        VALUES (?,?, ?, ?)";
        
        $stmt = $conObj->prepare($querystring);

        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }

        $stmt->bind_param(
            "isss", 
            $MIN_ID,
            $REP_img,
            $REP_CV,
            $working_catagory
        );

        $stmt->execute();
        $REP_ID = $conObj->insert_id;

        $stmt->close();

        $queryUser = "INSERT INTO user_data
        (MIN_ID,REP_ID, U_Email, U_DOB, U_Gender, U_L_Name, U_F_Name, U_Contact_No,U_Division, U_District,U_NID) 
        VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?,  ?)";
        $stmtUser = $conObj->prepare($queryUser);
        if (!$stmtUser) {
            die("Error preparing representative_data query: " . $conObj->error);
        }
        
        $stmtUser->bind_param(
            "iisssssissi",
            $MIN_ID,
            $REP_ID, 
            $REP_email, 
            $REP_dob,
            $REP_Gender, 
            $REP_Lastname, 
            $REP_Firstname,
            $REP_phone,
            $REP_Division, 
            $REP_District,
            $REP_NID

        );

        $result = $stmtUser->execute();

        $stmtUser->close();
        return $result;
    }

    function GetREP_Data($conObj, $userid) {
        $querystring = "SELECT representitive.*, user_data.U_Email, user_data.U_DOB, user_data.U_Gender, user_data.U_L_Name, user_data.U_F_Name, user_data.U_Contact_No 
                        FROM representitive 
                        LEFT JOIN user_data ON representitive.REP_ID = user_data.REP_ID 
                        WHERE representitive.MIN_ID = ?";
    
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

    function removeRepresentative($conObj, $REP_ID) {
        $queryUserData = "DELETE FROM user_data WHERE REP_ID = ?";
        $stmtUserData = $conObj->prepare($queryUserData);

        if (!$stmtUserData) {
            throw new Exception("Error preparing user_data query: " . $conObj->error);
        }

        $stmtUserData->bind_param("i", $REP_ID);
        $stmtUserData->execute();
        $stmtUserData->close();

        
        $querystring = "DELETE FROM representitive WHERE REP_ID = ?";
        $stmt = $conObj->prepare($querystring);
    
        if (!$stmt) {
            die("Error preparing query: " . $conObj->error);
        }
    
        $stmt->bind_param("i", $REP_ID);
        $result = $stmt->execute();
        $stmt->close();
    
        return $result;
    }

    function getuserWithUserData($conObj, $userid) {
        $querystring = "SELECT ministry.*, user_data.*
                        FROM ministry 
                        LEFT JOIN user_data ON ministry.MIN_ID = user_data.MIN_ID 
                        WHERE ministry.MIN_ID = ?";
    
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
?>
