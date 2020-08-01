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
     <form action="../includes/reset-requests.inc.php" method="POST" data-netlify="true">
        <div class="logo">
            <img src="../images/STEFLIX.png" alt="Steflix logo">
        </div>
        <h1>Reset Your Password !</h1>
        <input type="text" placeholder="Enter your e-mail">
        <h3>An e-mail will be sent to you with the instructions on how to change your password!</h3>
        <button type="submit" name="reset-requests-submit">Proceed</button>
    </form>
    <?php
    if (isset($_GET['reset'])) {
        if ($_GET["reset"] == "success") {
            echo '<p>Check your e-mail!</p>';
        }
    }
    ?>
 </div>
</body>
</html>