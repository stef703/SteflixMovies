<?php
    require_once "../Controllers/authController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verification.css">
    <link rel="icon" href="../images/titlu.png">
    <title>Steflix - Email Verification</title>
</head>
<body>
 <div class="container">
     <form action="verification.php" method="POST" data-netlify="true">
        <div class="logo">
            <img src="../images/STEFLIX.png" alt="Steflix logo">
        </div>
        <h1>Hello once more <em><?php echo $_SESSION['username'] ?></em>, Thanks for confirming your e-mail address !</h1>
        <h3>Click to proceed to your account!</h3>
        <button>Proceed</button>
    </form>
 </div>
</body>
</html>