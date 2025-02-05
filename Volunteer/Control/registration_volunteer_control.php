
<?php
session_start();
include '../Model/VLN_Db.php';
$errors = [];
$upload_dir = '../Uploads/';
$Images_dir = '../Images/';

if (!empty($_POST["VLN_Firstname"]) && ctype_alpha($_POST["VLN_Firstname"])) {
    echo "First Name: " . $_POST["VLN_Firstname"] . "<br>";
} else {
    echo "First Name should only contain alphabets.<br>";
    $errors["VLN_Firstname"] = "Invalid";
}


if (!empty($_POST["VLN_Lastname"]) && ctype_alpha( $_POST["VLN_Lastname"])) {
    echo "Last Name: " . $_POST["VLN_Lastname"] . "<br>";
} else {
    echo "Last Name should only contain alphabets.<br>";
    $errors["VLN_Lastname"] = "Invalid";
}


if (empty($_POST["VLN_password"])) {
    echo "Password cannot be empty.<br>";
    $errors["VLN_password"] = "Invalid";
} elseif (strlen($_POST["VLN_password"]) < 8) {
    echo "Password must be at least 8 characters long.<br>";
    $errors["VLN_password"] = "Invalid";
} else {
    echo "Password is valid.<br>";
}


if (isset($_POST["VLN_Gender"])) {
    echo "Selected Gender: " . $_POST["VLN_Gender"] . "<br>";
} else {
    echo "Please select at least one gender.<br>";
    $errors["VLN_Gender"] = "Invalid";
}


if (!empty($_POST["VLN_dob"])) {
    $dateParts = explode('-', $_POST["VLN_dob"]);
    if (count($dateParts) == 3 && checkdate((int)$dateParts[1], (int)$dateParts[2], (int)$dateParts[0])) {
        $currentDate = date("Y-m-d");
        if ($_POST["VLN_dob"] > $currentDate) {
            echo "Date of Birth cannot be in the future.<br>";
            $errors["VLN_dob"] = "Invalid";
        } else {
            echo "Date of Birth: " . $_POST["VLN_dob"] . "<br>";
        }
    } else {
        echo "Please enter a valid date in the format YYYY-MM-DD.<br>";
        $errors["VLN_dob"] = "Invalid";
    }
} else {
    echo "Please enter a valid date of birth.<br>";
    $errors["VLN_dob"] = "Invalid";
}


if (preg_match('/^[0-9]{13}$/', $_POST["VLN_NID"])) {
    echo "NID: " . $_POST["VLN_NID"] . "<br>";
} else {
    echo "NID must contain exactly 13 digits.<br>";
    $errors["VLN_NID"] = "Invalid";
}


if (preg_match('/^0[0-9]{10}$/', $_POST["VLN_phone"])) {
    echo "Mobile Number: " . $_POST["VLN_phone"] . "<br>";
} else {
    echo "Phone number must start with 0 and contain exactly 11 digits.<br>";
    $errors["VLN_phone"] = "Invalid";
}


if (!empty($_POST["VLN_email"]) && filter_var($_POST["VLN_email"], FILTER_VALIDATE_EMAIL)) {
    if (strpos($_POST["VLN_email"], '@gmail.com') !== false) {
        echo "Email: " . $_POST["VLN_email"] . "<br>";
    } else {
        echo "Only Gmail addresses are allowed.<br>";
        $errors["VLN_email"] = "Invalid";
    }
} else {
    echo "Email address is required and must be valid.<br>";
    $errors["VLN_email"] = "Invalid";
}


if ($_POST["Division"] != "none") {
    echo "Selected Division: " . $_POST["Division"] . "<br>";
} else {
    echo "Please select a valid division.<br>";
    $errors["Division"] = "Invalid";
}


if ($_POST["District"] != "none") {
    echo "Selected District: " . $_POST["District"] . "<br>";
} else {
    echo "Please select a valid district.<br>";
    $errors["District"] = "Invalid";
}


if (isset($_POST["VLN_Work"])) {
    echo "Selected Work Time: " . $_POST["VLN_Work"] . "<br>";
} else {
    echo "Please select a work time.<br>";
    $errors["VLN_Work"] = "Invalid";
}


if (isset($_FILES["VLN_cv"])) {
    if ($_FILES["VLN_cv"]["error"] === UPLOAD_ERR_OK) {
        $cv_name = basename($_FILES["VLN_cv"]["name"]);
        $target_file = $upload_dir . $cv_name;

        
        $allowed_types = ['application/pdf'];
        $file_type = mime_content_type($_FILES["VLN_cv"]["tmp_name"]);
        if (!in_array($file_type, $allowed_types)) {
            $errors["VLN_cv"] = "Only PDF files are allowed.";
        }

        
        if ($_FILES["VLN_cv"]["size"] > 5 * 1024 * 1024) {
            $errors["VLN_cv"] = "File size must not exceed 5MB.";
        }

        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); 
        }

        
        if (empty($errors) && move_uploaded_file($_FILES["VLN_cv"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully: $cv_name<br>";
        } else {
            echo "Error: Failed to move uploaded file.<br>";
            $errors["VLN_cv"] = "Upload failed.";
        }
    } else {
        echo "File upload error: " . $_FILES["VLN_cv"]["error"] . "<br>";
        $errors["VLN_cv"] = "Error uploading the file.";
    }
} else {
    echo "No file uploaded.<br>";
    $errors["VLN_cv"] = "File is required.";
}

if (isset($_FILES["VLN_pic"])) {
    if ($_FILES["VLN_pic"]["error"] === UPLOAD_ERR_OK) {
    $image_name = basename($_FILES["VLN_pic"]["name"]);
    $target_file1 = $Images_dir . $image_name;

    
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES["VLN_pic"]["tmp_name"]);
    if (!in_array($file_type, $allowed_types)) {
    $errors["VLN_pic"] = "Only JPEG, PNG, and GIF files are allowed.";
    }

    
    if ($_FILES["VLN_pic"]["size"] > 5 * 1024 * 1024) {
    $errors["VLN_pic"] = "File size must not exceed 5MB.";
    }

   
    if (!is_dir($Images_dir)) {
    mkdir($Images_dir, 0777, true);
    }

   
    if (empty($errors) && move_uploaded_file($_FILES["VLN_pic"]["tmp_name"], $target_file1)) {
    echo "File uploaded successfully: $image_name<br>";
    } else {
    echo "Error: Failed to move uploaded file.<br>";
    $errors["VLN_pic"] = "Upload failed.";
    }
    } else {
    echo "File upload error: " . $_FILES["VLN_pic"]["error"] . "<br>";
    $errors["VLN_pic"] = "Error uploading the file.";
    }
} else {
    echo "No file uploaded.<br>";
    $errors["VLN_pic"] = "File is required.";
}


if (empty($errors)) {
    $db = new mydb();
    $con = $db->openCon();

    $result = $db->addUser(
        $con,
        'volunteer',
        $_POST["VLN_email"],
        $_POST["VLN_dob"],
        $_POST["VLN_Gender"],
        $_POST["VLN_Lastname"],
        $_POST["VLN_Firstname"],
        $_POST["VLN_password"],
        $_POST["VLN_NID"],
        $_POST["VLN_phone"],
        $_POST["VLN_Work"],
        $_POST["Division"],
        $_POST["District"],
        $target_file,
        $target_file1
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
    
