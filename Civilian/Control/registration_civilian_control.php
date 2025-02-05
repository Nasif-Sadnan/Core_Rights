<?php
    session_start();
?>

<html>
    <head>
        <title>Registration Control Panel</title>
    </head>
    <?php include '../Model/CIV_Db.php'; ?>
    <body>
        Welcome
        <?php 
        $errors = [];
        $CIV_dob = false;
        $Images_dir = '../Images/';

        
        if (!empty($_POST["CIV_Firstname"]) && ctype_alpha($_POST["CIV_Firstname"])) {
            echo $_POST["CIV_Firstname"];
        } else {
            echo "First Name should only contain alphabets.<br>";
            $errors["CIV_Firstname"] = "Invalid";
        }
        
        if (ctype_alpha($_POST["CIV_Lastname"])) {
            echo " " . $_POST["CIV_Lastname"];
        } else {
            echo "Last Name should only contain alphabets.<br>";
            $errors["CIV_Lastname"] = "Invalid";
        }

        echo "<br>";

        if (empty($_POST['VIC_password'])) 
        {
            echo "Password cannot be empty.";
            $errors ["passError"]= "Invalid";
        } 
        
        elseif (strlen($_POST['VIC_password']) < 8) {
            echo "Password must be at least 8 characters long.";
            $errors ["passError"]= "Invalid";
        } 
        else {
            echo "<p>Password is valid!</p>";

        }
    



        echo "<br>";

        if (isset($_POST["CIV_Gender"])) {
            echo $_POST["CIV_Gender"] . "<br>";
        } else {
            echo "Please select at least one gender.<br>";
            $errors["CIV_Gender"] = "Invalid";
        }


        if (!empty($_POST["CIV_dob"])) {
            $dateParts = explode('-', $_POST["CIV_dob"]);
            if (count($dateParts) == 3 && checkdate((int)$dateParts[1], (int)$dateParts[2], (int)$dateParts[0])) {
                echo "Date of Birth: " . $_POST["CIV_dob"] . "<br>";
                $CIV_dob = true;
            } else {
                echo "Please enter a valid date in the format YYYY-MM-DD.<br>";
                $errors["CIV_dob"] = "Invalid";
            }
        } else {
            echo "Please enter a valid date of birth.<br>";
            $errors["CIV_dob"] = "Invalid";
        }


        if (preg_match('/^0[0-9]+$/', $_POST["CIV_phone"])) {
            echo $_POST["CIV_phone"];
        } else {
            echo "Phone number must start with 0 and contain only numbers.<br>";
            $errors["CIV_phone"] = "Invalid";
        }

        echo "<br>";

        
        if (isset($_POST["CIV_email"]) && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/', $_POST["CIV_email"])) {
            echo $_POST["CIV_email"];
            
            
        } else {
            echo "Email address is required and must contain '@' and end with '.com'.<br>";
            $errors["CIV_email"] = "Invalid";
        }

        echo "<br>";

        
        if (isset($_POST["Division"])) {
            echo $_POST["Division"] . "<br>";
        } else {
            echo "Please select at least one division.<br>";
            $errors["Division"] = "Invalid";
        }

        
        if (isset($_POST["District"])) {
            echo $_POST["District"] . "<br>";
        } else {
            echo "Please select at least one district.<br>";
            $errors["District"] = "Invalid";
        }

       
        if (preg_match('/^[0-9]{13}$/', $_POST["CIV_NID"])) {
            echo $_POST["CIV_NID"];
        } else {
            echo "NID must contain exactly 13 digits.<br>";
            $errors["CIV_NID"] = "Invalid";
        }

        
        if (!empty($_POST["address"])) {
            echo $_POST["address"];
        } else {
            echo "Address is required.<br>";
            $errors["address"] = "Invalid";
        }

        
       
        if (isset($_FILES["CIV_NID_front"])) {
            if ($_FILES["CIV_NID_front"]["error"] === UPLOAD_ERR_OK) {
            $image_name = basename($_FILES["CIV_NID_front"]["name"]);
            $target_file1 = $Images_dir . $image_name;

            
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $file_type = mime_content_type($_FILES["CIV_NID_front"]["tmp_name"]);
            if (!in_array($file_type, $allowed_types)) {
                $errors["CIV_NID_front"] = "Only JPEG, PNG, and GIF files are allowed.";
            }

            
            if ($_FILES["CIV_NID_front"]["size"] > 5 * 1024 * 1024) {
                $errors["CIV_NID_front"] = "File size must not exceed 5MB.";
            }

            
            if (!is_dir($Images_dir)) {
                mkdir($Images_dir, 0777, true);
            }

            
            if (empty($errors) && move_uploaded_file($_FILES["CIV_NID_front"]["tmp_name"], $target_file1)) {
                echo "File uploaded successfully: $image_name<br>";
            } else {
                echo "Error: Failed to move uploaded file.<br>";
                $errors["CIV_NID_front"] = "Upload failed.";
            }
            } else {
            echo "File upload error: " . $_FILES["CIV_NID_front"]["error"] . "<br>";
            $errors["CIV_NID_front"] = "Error uploading the file.";
            }
        } else {
            echo "No file uploaded.<br>";
            $errors["CIV_NID_front"] = "File is required.";
        }

       

        if (isset($_FILES["CIV_NID_Back"])) {
            if ($_FILES["CIV_NID_Back"]["error"] === UPLOAD_ERR_OK) {
            $image_name = basename($_FILES["CIV_NID_Back"]["name"]);
            $target_file = $Images_dir . $image_name;

            
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $file_type = mime_content_type($_FILES["CIV_NID_Back"]["tmp_name"]);
            if (!in_array($file_type, $allowed_types)) {
            $errors["CIV_NID_Back"] = "Only JPEG, PNG, and GIF files are allowed.";
            }

            
            if ($_FILES["CIV_NID_Back"]["size"] > 5 * 1024 * 1024) {
            $errors["CIV_NID_Back"] = "File size must not exceed 5MB.";
            }

            
            if (!is_dir($Images_dir)) {
            mkdir($Images_dir, 0777, true);
            }

           
            if (empty($errors) && move_uploaded_file($_FILES["CIV_NID_Back"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully: $image_name<br>";
            } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["CIV_NID_Back"] = "Upload failed.";
            }
            } else {
            echo "File upload error: " . $_FILES["CIV_NID_Back"]["error"] . "<br>";
            $errors["CIV_NID_Back"] = "Error uploading the file.";
            }
        } else {
            echo "No file uploaded.<br>";
            $errors["CIV_NID_Back"] = "File is required.";
        }


        if (isset($_FILES["temppic"])) {
            if ($_FILES["temppic"]["error"] === UPLOAD_ERR_OK) {
            $image_name = basename($_FILES["temppic"]["name"]);
            $target_file3 = $Images_dir . $image_name;

            
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $file_type = mime_content_type($_FILES["temppic"]["tmp_name"]);
            if (!in_array($file_type, $allowed_types)) {
            $errors["temppic"] = "Only JPEG, PNG, and GIF files are allowed.";
            }

            
            if ($_FILES["temppic"]["size"] > 5 * 1024 * 1024) {
            $errors["temppic"] = "File size must not exceed 5MB.";
            }

            
            if (!is_dir($Images_dir)) {
            mkdir($Images_dir, 0777, true);
            }

            
            if (empty($errors) && move_uploaded_file($_FILES["temppic"]["tmp_name"], $target_file3)) {
            echo "File uploaded successfully: $image_name<br>";
            } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["temppic"] = "Upload failed.";
            }
            } else {
            echo "File upload error: " . $_FILES["temppic"]["error"] . "<br>";
            $errors["temppic"] = "Error uploading the file.";
            }
        } else {
            echo "No file uploaded.<br>";
            $errors["temppic"] = "File is required.";
        }

      
        
            
            if (empty($_POST['agree'])) {
                echo "You must select either Yes or No.";
                $errors["ageeerror"] = "invalid";
            } 
            else {
                $agree = $_POST['agree']; 
                if ($agree === "Yes") {
                    echo "<p>You selected 'Yes'.</p>";
                } elseif ($agree === "No") {
                    echo "<p>You selected 'No'.</p>";
                }
            }
        

        
        if (empty($errors)) {
            $db = new mydb();
            $con = $db->openCon();

            $result = $db->addUser(
                $con,
                'victim',
                $_POST['VIC_password'],
                $_POST['agree'],
                $_POST["CIV_email"],
                $_POST["CIV_dob"],
                $_POST["CIV_Gender"],
                $_POST["CIV_Lastname"],
                $_POST["CIV_Firstname"],
                $_POST["CIV_NID"],
                $_POST["CIV_phone"],
                $_POST["address"],
                $_POST["Division"],
                $_POST["District"],
                $target_file1,
                $target_file,
                $target_file3
            );

            if ($result) {
                $_SESSION["email"]=$_POST["CIV_email"];
                header("Location: ../Control/Send_Mail.php");

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
