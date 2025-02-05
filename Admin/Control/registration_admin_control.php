<html>
    <head>
        <title>Registration Control Panel</title>
    </head>
    <?php include '../Model/AD_Db.php';?>
    <body>
        Welcome
        <?php 
        $errors = [];
        $upload_dir = '../Uploads/';
        $Images_dir = '../Images/';
        $AD_cv = $_FILES['AD_cv']; 


        if(ctype_alpha($_POST["AD_Firstname"])) {
            echo $_POST["AD_Firstname"];
        } else {
            echo "First Name should only contain alphabets.<br>";
            $errors["F_Name"] = "Invalid";
        }

        
        if(ctype_alpha($_POST["AD_Lastname"])) {
            echo " " . $_POST["AD_Lastname"];
        } else {
            echo "Last Name should only contain alphabets.<br>";
            $errors["L_Name"] = "Invalid";
        }

        echo "<br>";
        
            
        if (empty($_POST['AD_password'])) 
            {
                echo "Password cannot be empty.";
                $errors ["passError"]= "Invalid";
            } 
            
            elseif (strlen($_POST['AD_password']) < 8) {
                echo "Password must be at least 8 characters long.";
                $errors ["passError"]= "Invalid";
            } 
            else {
                echo "<p>Password is valid!</p>";

            }
        
        echo "<br>";


        if(isset($_POST["AD_Gender"])) {
            echo $_POST["AD_Gender"] . "<br>";
        } else {
            echo "Please select at least one gender.<br>";
            $errors["gender"] = "Invalid";
        }

        
        if (!empty($_POST["AD_dob"])) {
            $dateParts = explode('-', $_POST["AD_dob"]);
            if (count($dateParts) == 3 && checkdate((int)$dateParts[1], (int)$dateParts[2], (int)$dateParts[0])) {
                echo "Date of Birth: " . $_POST["AD_dob"] . "<br>";
            } else {
                echo "Please enter a valid date in the format YYYY-MM-DD.<br>";
                $errors["DOB"] = "Invalid";
            }
        } else {
            echo "Please enter a valid date of birth.<br>";
            $errors["DOB"] = "Invalid";
        }

        
        if (preg_match('/^0[0-9]+$/', $_POST["AD_phone"])) {
            echo $_POST["AD_phone"];
        } else {
            echo "Phone number must start with 0 and contain only numbers.<br>";
            $errors["phone"] = "Invalid";
        }

        
        if (isset($_POST["AD_email"]) && preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.com$/', $_POST["AD_email"])) {
            echo $_POST["AD_email"];
        } else {
            echo "Email address is required and must contain '@' and end with '.com'.<br>";
            $errors["email"] = "Invalid";
        }

        
        if (isset($_FILES["AD_cv"])) {
            if ($_FILES["AD_cv"]["error"] === UPLOAD_ERR_OK) {
                $cv_name = basename($_FILES["AD_cv"]["name"]);
                $target_file = $upload_dir . $cv_name;

                
                $allowed_types = ['application/pdf'];
                $file_type = mime_content_type($_FILES["AD_cv"]["tmp_name"]);
                if (!in_array($file_type, $allowed_types)) {
                    $errors["AD_cv"] = "Only PDF files are allowed.";
                }

                
                if ($_FILES["AD_cv"]["size"] > 5 * 1024 * 1024) {
                    $errors["AD_cv"] = "File size must not exceed 5MB.";
                }

                
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true); 
                }

                
                if (empty($errors) && move_uploaded_file($_FILES["AD_cv"]["tmp_name"], $target_file)) {
                    echo "File uploaded successfully: $cv_name<br>";
                } else {
                    echo "Error: Failed to move uploaded file.<br>";
                    $errors["AD_cv"] = "Upload failed.";
                }
            } else {
                echo "File upload error: " . $_FILES["AD_cv"]["error"] . "<br>";
                $errors["AD_cv"] = "Error uploading the file.";
            }
        } else {
            echo "No file uploaded.<br>";
            $errors["AD_cv"] = "File is required.";
        }

        if (isset($_FILES["propic"])) {
            if ($_FILES["propic"]["error"] === UPLOAD_ERR_OK) {
            $image_name = basename($_FILES["propic"]["name"]);
            $target_file1 = $Images_dir . $image_name;

           
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $file_type = mime_content_type($_FILES["propic"]["tmp_name"]);
            if (!in_array($file_type, $allowed_types)) {
            $errors["propic"] = "Only JPEG, PNG, and GIF files are allowed.";
            }

            
            if ($_FILES["propic"]["size"] > 5 * 1024 * 1024) {
            $errors["propic"] = "File size must not exceed 5MB.";
            }

            
            if (!is_dir($Images_dir)) {
            mkdir($Images_dir, 0777, true);
            }

           
            if (empty($errors) && move_uploaded_file($_FILES["propic"]["tmp_name"], $target_file1)) {
            echo "File uploaded successfully: $image_name<br>";
            } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["propic"] = "Upload failed.";
            }
            } else {
            echo "File upload error: " . $_FILES["propic"]["error"] . "<br>";
            $errors["propic"] = "Error uploading the file.";
            }
        } else {
            echo "No file uploaded.<br>";
            $errors["propic"] = "File is required.";
        }

       
        if (empty($errors)) {
            $db = new mydb();
            $con = $db->openCon();

            $result = $db->addUser(
                $con,
                'admin',
                $_POST["AD_email"],
                $_POST["AD_dob"],
                $_POST["AD_Gender"],
                $_POST["AD_Lastname"],
                $_POST["AD_Firstname"],
                $_POST["AD_phone"],
                $_POST["AD_password"],
                $target_file ,
                $target_file1,
            );

            if ($result) {
                header("Location: ../View/login.php");
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
