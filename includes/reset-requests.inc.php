<?php
   
   use PHPMailer\PHPMailer\PHPMailer;
   if (isset($_POST['reset-requests-submit'])) {
    
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);
    
        $url = "http://localhost/STEFLIX/Verification/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    
        $expires = date("U") + 1800;
    
        require 'dbh.php';
    
         $userEmail =$_POST['email'];
    
         $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             echo "There was an error!";
             exit();
         } else {
             mysqli_stmt_bind_param($stmt, "s", $userEmail);
             mysqli_stmt_execute($stmt);
         }
    
         $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             echo "There was an error!";
             exit();
         } else {
             $hashedToken = password_hash($token, PASSWORD_DEFAULT);
             mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
             mysqli_stmt_execute($stmt);
         }
    
         mysqli_stmt_close($stmt);
         mysqli_close($conn);
         
         require_once "PHPMailer/PHPMailer.php";
         require_once "PHPMailer/Exception.php";
         $mail = new PHPMailer();
         $mail->setFrom(address,'programmingmix@gmail.com');
         $mail->addAddress($userEmail);
         $mail->Subject = "Steflix Account Password Reset";
         $mail->Body = "Hi, <a href='$url'>Click</a>";
    
         if($mail->send()){
            header("location: ../Verification/reset-password.php?reset=success");
         } else {
            header("location: ../index.php?reset=fail");
         }
        };