<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/884756b987.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="../images/titlu.png">
    <title>Steflix - Creating An Account</title>
</head>
<body>
    <header class="top-showcase"> 
        <div class="logo-showcase">
            <img src="../images/STEFLIX.png" alt="Steflix">
        </div>
        <div class="sign-in-showcase">
            <a href="../index.php">Sign In</a>
        </div>
    </header> 
    <!--MODAL-->
<div class="container-case">    
    <div class="container">
        <form method="post" action="../includes/signup.inc.php">
        <?php 
        if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                       echo '<p class="alert-messages">Fill in all the fields!</p>'; 
                    }
                    else if ($_GET['error'] == "invalidmail") {
                        echo '<p class="alert-messages">Invalid e-mail!</p>';
                    }
                    else if ($_GET['error'] == "passwordcheck") {
                        echo '<p class="alert-messages">Your passwords do not match!</p>';
                    }
                    else if ($_GET['error'] == "emailexisting") {
                        echo '<p class="alert-messages">There is already another account registered with this email and/or username!</p>';
                    }
                }
                ?>
            <h3>Enjoy your first month.It's Free.</h3>
            <h2>Create an account to start your free month.</h2>
            <input type="text" placeholder="Choose a username" name="uid" value="<?php if(isset($_GET["uid"])){echo($_GET["uid"]);}?>">
            <input type="text" placeholder="Add an email" name="mail" value="<?php if(isset($_GET["mail"])){echo($_GET["mail"]);}?>">
            <input type="password" placeholder="Create a password" name="pwd" minlength="4"  >
            <input type="password" placeholder="Repeat password" name="pwd-repeat" minlength="4" >
            <button type="submit" name="signup-submit">Continue</button>
        </form>
    </div>
</div>
<footer class="showcase-bottom">
    <div class="footer-items-showcase">
        <div class="footer-column-showcase">
            <a href="https://ncov19.netlify.app" target="_blank">Coronavirus Tracker (Steflix)</a>
        </div>
        <div class="footer-column-showcase">
            <a href="https://thunderstorms.netlify.app" target="_blank">Weather Map (Steflix)</a>
        </div>
        <div id="google_translate_element"></div>
            <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
    </html>