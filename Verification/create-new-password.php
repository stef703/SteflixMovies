<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verification.css">
    <link rel="icon" href="../images/titlu.png">
    <title>Steflix - Password Reset</title>
</head>
<body>
 <div class="container">
     <?php 
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request!";
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                
                ?>
                <form action="../includes/reset-requests.inc.php" method="POST" data-netlify="true">
                    <div class="logo">
                        <img src="../images/STEFLIX.png" alt="Steflix logo">
                    </div>
                    <input type="hidden" name="selector" value="<?php echo $selector;?>">
                    <input type="hidden" name="validator" value="<?php echo $validator;?>">
                    <input type="password" name="pwd" placeholder="Enter a new password">
                    <input type="password" name="pwd-repeat" placeholder="Confirm password">
                    <button type="submit" name="reset-password-submit">Save</button>
                </form>
                <?php
            }
        }
     ?>
 </div>
</body>
</html>