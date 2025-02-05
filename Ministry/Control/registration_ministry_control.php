<html>
<head>
    <title>Registration Control Panel</title>
</head>
<?php include '../Model/MIN_Db.php'; ?>
<body>
    Welcome
    <?php 
    $errors = [];
    $MIN_dob = false;
    $upload_dir = '../Upload/';
    $Images_dir = '../Images/';

    
    if (!empty($_POST["Min_Firstname"]) && ctype_alpha($_POST["Min_Firstname"])) {
        echo $_POST["Min_Firstname"];
    } else {
        echo "First Name should only contain alphabets.<br>";
        $errors["Min_Firstname"] = "Invalid";
    }

    
    if (!empty($_POST["Min_Lastname"]) && ctype_alpha($_POST["Min_Lastname"])) {
        echo " " . $_POST["Min_Lastname"];
    } else {
        echo "Last Name should only contain alphabets.<br>";
        $errors["Min_Lastname"] = "Invalid";
    }

    echo "<br>";

    if (empty($_POST['MIN_password'])) 
            {
                echo "Password cannot be empty.";
                $errors ["passError"]= "Invalid";
            } 
            
            elseif (strlen($_POST['MIN_password']) < 8) {
                echo "Password must be at least 8 characters long.";
                $errors ["passError"]= "Invalid";
            } 
            else {
                echo "<p>Password is valid!</p>";

            }
        
        echo "<br>";
    echo "<br>";

    
    if (!empty($_POST["Min_nid"])) {
        echo $_POST["Min_nid"];
    } else {
        echo "NID should only contain number.<br>";
        $errors["Min_nid"] = "Invalid";
    }
    

   
    if (isset($_POST["Min_gender"])) {
        echo $_POST["Min_gender"] . "<br>";
    } else {
        echo "Please select at least one gender.<br>";
        $errors["Min_gender"] = "Invalid";
    }

    
    if (!empty($_POST["Min_dob"])) {
        $dateParts = explode('-', $_POST["Min_dob"]);
        if (count($dateParts) == 3 && checkdate((int)$dateParts[1], (int)$dateParts[2], (int)$dateParts[0])) {
            echo "Date of Birth: " . $_POST["Min_dob"] . "<br>";
            $MIN_dob = true;
        } else {
            echo "Please enter a valid date in the format YYYY-MM-DD.<br>";
            $errors["Min_dob"] = "Invalid";
        }
    } else {
        echo "Please enter a valid date of birth.<br>";
        $errors["Min_dob"] = "Invalid";
    }

    
    if (isset($_POST["Min_email"]) && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/', $_POST["Min_email"])) {
        echo $_POST["Min_email"] . "<br>";
    } else {
        echo "Email address is required and must contain '@' and end with '.com'.<br>";
        $errors["Min_email"] = "Invalid";
    }

    
    if (isset($_POST["Ministry"])) {
        echo $_POST["Ministry"] . "<br>";
    } else {
        echo "Please select at least one ministry.<br>";
        $errors["Ministry"] = "Invalid";
    }

 
    if (isset($_FILES["MIN_NID_front"])) {
        if ($_FILES["MIN_NID_front"]["error"] === UPLOAD_ERR_OK) {
        $image_name = basename($_FILES["MIN_NID_front"]["name"]);
        $target_file1 = $Images_dir . $image_name;

     
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($_FILES["MIN_NID_front"]["tmp_name"]);
        if (!in_array($file_type, $allowed_types)) {
            $errors["MIN_NID_front"] = "Only JPEG, PNG, and GIF files are allowed.";
        }

      
        if ($_FILES["MIN_NID_front"]["size"] > 5 * 1024 * 1024) {
            $errors["MIN_NID_front"] = "File size must not exceed 5MB.";
        }

        
        if (!is_dir($Images_dir)) {
            mkdir($Images_dir, 0777, true);
        }

        
        if (empty($errors) && move_uploaded_file($_FILES["MIN_NID_front"]["tmp_name"], $target_file1)) {
            echo "File uploaded successfully: $image_name<br>";
        } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["MIN_NID_front"] = "Upload failed.";
        }
        } else {
        echo "File upload error: " . $_FILES["MIN_NID_front"]["error"] . "<br>";
        $errors["MIN_NID_front"] = "Error uploading the file.";
        }
    } else {
        echo "No file uploaded.<br>";
        $errors["MIN_NID_front"] = "File is required.";
    }

    

    if (isset($_FILES["MIN_NID_Back"])) {
        if ($_FILES["MIN_NID_Back"]["error"] === UPLOAD_ERR_OK) {
        $image_name = basename($_FILES["MIN_NID_Back"]["name"]);
        $target_file2 = $Images_dir . $image_name;

        
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($_FILES["MIN_NID_Back"]["tmp_name"]);
        if (!in_array($file_type, $allowed_types)) {
        $errors["MIN_NID_Back"] = "Only JPEG, PNG, and GIF files are allowed.";
        }

        
        if ($_FILES["MIN_NID_Back"]["size"] > 5 * 1024 * 1024) {
        $errors["MIN_NID_Back"] = "File size must not exceed 5MB.";
        }

        
        if (!is_dir($Images_dir)) {
        mkdir($Images_dir, 0777, true);
        }

        
        if (empty($errors) && move_uploaded_file($_FILES["MIN_NID_Back"]["tmp_name"], $target_file2)) {
        echo "File uploaded successfully: $image_name<br>";
        } else {
        echo "Error: Failed to move uploaded file.<br>";
        $errors["MIN_NID_Back"] = "Upload failed.";
        }
        } else {
        echo "File upload error: " . $_FILES["MIN_NID_Back"]["error"] . "<br>";
        $errors["MIN_NID_Back"] = "Error uploading the file.";
        }
    } else {
        echo "No file uploaded.<br>";
        $errors["MIN_NID_Back"] = "File is required.";
    }


   

    if (isset($_FILES["MIN_userpic"])) {
        if ($_FILES["MIN_userpic"]["error"] === UPLOAD_ERR_OK) {
        $image_name = basename($_FILES["MIN_userpic"]["name"]);
        $target_file = $Images_dir . $image_name;

        
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($_FILES["MIN_userpic"]["tmp_name"]);
        if (!in_array($file_type, $allowed_types)) {
            $errors["MIN_userpic"] = "Only JPEG, PNG, and GIF files are allowed.";
        }

        
        if ($_FILES["MIN_userpic"]["size"] > 5 * 1024 * 1024) {
            $errors["MIN_userpic"] = "File size must not exceed 5MB.";
        }

        
        if (!is_dir($Images_dir)) {
            mkdir($Images_dir, 0777, true);
        }

        
        if (empty($errors) && move_uploaded_file($_FILES["MIN_userpic"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully: $image_name<br>";
        } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["MIN_userpic"] = "Upload failed.";
        }
        } else {
        echo "File upload error: " . $_FILES["MIN_userpic"]["error"] . "<br>";
        $errors["MIN_userpic"] = "Error uploading the file.";
        }
    } else {
        echo "No file uploaded.<br>";
        $errors["MIN_userpic"] = "File is required.";
    }

    
    if (empty($errors)) {
        $db = new mydb();
        $con = $db->openCon();

        $result = $db->addUser(
            $con,
            'ministry',
            $_POST["Min_email"],
            $_POST["Min_dob"],
            $_POST["Min_gender"],
            $_POST["Min_Lastname"],
            $_POST["Min_Firstname"],
            $_POST["Min_nid"],
            $_POST["Ministry"],
            $_POST["MIN_password"],
            $target_file1,
            $target_file2,
            $target_file
        );

        if ($result) {
            header("Location: ../View/Home.php");
            exit();
        } else {
            echo "Database Error: " . $con->error;
        }

        $db->closeCon($con);
    } else {
        echo "<br><b>There were errors in your form submission:</b><br>";
        foreach ($errors as $key => $error) {
            echo "$key: $error<br>";
        }
    }
    ?>
</body>
</html>
