
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
     <form action="../includes/signup.inc.php" method="POST" data-netlify="true">
        <div class="logo">
            <img src="../images/STEFLIX.png" alt="Steflix logo">
        </div>
        <h1>Hello, Please verify your email</h1>
        <h5>You're almost there! We sent an email to</h5>
        <u><h5><em><?php if(isset($_GET["emailUsers"])){echo($_GET["emailUsers"]);}?></em></h5></u>
        <p>Just click on the link in that email to complete your signup,
            if you don't see it, you may need to check your spam folder.
        </p>
        <h3>Still didn't receive the email?</h3>
        <button>Resend E-mail</button>
    </form>
    <div class="loader"></div>
 </div>
</body>
</html>