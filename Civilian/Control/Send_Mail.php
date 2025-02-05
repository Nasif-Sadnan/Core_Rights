<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "../../vendor/autoload.php";

    $mail= new PHPMailer(true);

        $mail -> isSMTP();
        $mail -> SMTPAuth=true;

        

        $mail -> Host="smtp.gmail.com";
        $mail -> SMTPSecure = PHPMailer:: ENCRYPTION_STARTTLS;
        $mail -> Port = 587;

        
        $mail -> Username = "anirudda045@gmail.com";
        $mail ->  Password ="hiby rgjp bvfy shqp";

        $mail -> setFrom("anirudda045@gmail.com","Core rights");
        $mail -> addAddress( $_SESSION["email"],"User");

        $mail -> Subject = "YourID";
        $mail -> Body = "Your User ID is :". $_SESSION["VIC_ID"];

        $mail-> send();

        session_destroy();
        header("Location: ../View/login.php");
?>