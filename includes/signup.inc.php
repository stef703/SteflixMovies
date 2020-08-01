<?php
if (isset($_POST['signup-submit'])) {

  require 'dbh.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("location: ../Signup/signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../Signup/signup.php?error=invalidmailuid");
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../Signup/signup.php?error=invalidmail&uid=".$username."&mail=".$email);
        exit();
    } 
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../Signup/signup.php?error=invaliduid&mail=".$email."&uid=".$username);
        exit();
    } 
    else if ($password !== $passwordRepeat) {
        header("location: ../Signup/signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else {

        $sql = "SELECT * FROM steflixusers WHERE uidUsers=? OR emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../Signup/signup.php?error=sqlerror");
            exit();

        } 
        else {
            mysqli_stmt_bind_param($stmt, "ss",$username, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location: ../Signup/signup.php?error=emailexisting&mail=".$email."&uid=".$username);
                exit();

            } 
            else {
                $sql = "INSERT INTO steflixusers (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../Signup/signup.php?error=sqlerror");
                    exit();
                } 
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("location: ../Verification/verification.php");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} 
else {
    header("location: ../Signup/signup.php?signup=success");
    exit();
}
