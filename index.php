<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="indexx.css">
    <script src="https://use.fontawesome.com/884756b987.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/titlu.png">
    <title> Steflix - Watch TV Shows Online, Watch Movies Online</title>
</head>
<body>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-dc35b129-6a0c-4651-9be1-a3f4083575f0"></div>
        <div class="modal-box" id="modal">
            <?php 
            if (isset($_GET['newpwd'])) {
                if ($_GET['newpwd'] == "passwordupdated") {
                    echo '<p> Your password has been reset!</p>';
                }
            }
            ?>
     
            <form action="includes/login.inc.php" method="post" id="modal-exit" data-netlify="true">
                <div class="sign-items">
                <?php 
        if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                       echo '<p class="alert-danger">Fill in all the fields!</p>'; 
                    }
                    else if ($_GET['error'] == "wrongpassword") {
                        echo '<p class="alert-danger">Wrong Password!</p>';
                    }
                    else if ($_GET['error'] == "nosuchuser") {
                        echo '<p class="alert-danger">There is no such user!</p>';
                    }
                }
                ?>
                        <h1>Sing In</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Your E-mail address" name="mailuid" value="<?php if(isset($mailuid)){echo($_GET["mailuid"]);}?>">
                        <input type="password" placeholder="Password" name="pwd">
                        <button class="modal-sign-in" name="login-submit">Sign In</button>
                    </div>
                    <div class="user-problems">
                        
                        <a href="Verification/reset-password.php">Forgot Password?</a>
                    </div>
                    <div class="modal-bottom-stuff">
                        <div class="facebook">
                            <i class="fa fa-facebook-square"></i><p>Login with Facebook</p>
                        </div>
                        <div class="new-steflix">
                            <p>New to Steflix?</p> <a href="#" onclick="openSignup(), animateButton()">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <header class="showcase">
        <div class="showcase-top">
            <div class="showcase-top-container">
                <img src="images/STEFLIX.png" alt="Steflix">     
                <a class="sign-in-btn" id="sign-in-modal" onclick="openModal()">Sign In</a>
            </div>
        </div>
    <div class="showcase-content" id="showcase-content">
            <h1>Unlimited movies, TV <br> shows,and more.</h1><br>
            <h3>Watch anywhere. Cancel anytime.</h3><br>
        <div class="email-form" id="modal-background">
            <div class="email-form-lockup" id="modal-background">
                <a href="Signup/signup.php"><button class="btn" id="sign-button">Watch for free</button></a>
            </div>
        </div>
        <p>Ready to watch? Click on the button above to create or access your account.</p>
    </div>
    </header>
    <div class="showcase-tv">
            <div class="tv-info">
                <div class="about-tv">
                    <h1>Enjoy on your TV.</h1>
                    <p>Watch on Smart TVs, Playstation, Xbox, <br>Chromecast, Apple TV, Blu-ray players, and <br>more.</p>
                </div>
                <div class="online-tv-frame">
                   <video autoplay loop muted> <source src="images/steflix.mp4" type="video/mp4" id="myvideo"></video>
                </div>
            </div>
    </div>
    <div class="showcase-mobile">
        <div class="mobile-info">
            <div class="online-mobile-frame">
               <img src="images/mobile.jpg" alt="phone">
            </div>
            <div class="about-mobile">
                <h1>Download your shows <br> to watch on the go.</h1>
                <p>Save your data and watch all your favorites <br>offline.</p>
            </div>
        </div>
    </div>
    <div class="showcase-tv">
        <div class="tv-info">
            <div class="about-tv">
                <h1>Watch everywhere.</h1>
                <p>Stream unlimited movies and TV shows on <br> your phone, tablet, laptop, and TV without <br> paying more.</p>
            </div>
            <div class="online-tv-frame">
               <video autoplay loop muted> <source src="images/apple.mp4" type="video/mp4" id="myvideo"></video>
            </div>
        </div>
    </div>
    <div class="FAQ-showcase">
        <div class="question-showcase">
            <h1  class="FAQ">Frequently asked questions</h1>
            <details>
                <summary>What is Steflix?</summary>
                <div class="text">
                    Steflix is a streaming service that offers a wide 
                    variety of award-winning TV shows, movies, anime, documentaries, 
                    and more on thousands of internet-connected devices. <br>
                    You can watch as much as you want, whenever you want without a single commercial – all 
                    for one low monthly price. There's always something new to discover.
                </div>
            </details>
            <details>
                <summary>How much does Steflix cost?</summary>
                <div class="text">
                    Watch Steflix on your smartphone, tablet, Smart TV, laptop, or streaming device,
                     all for one low fixed monthly fee. Plans start from EUR7.99 a month. No extra costs or contracts.
                </div>
            </details>
            <details>
                <summary>Where can I watch?</summary>
                <div class="text">
                    Watch anywhere, anytime, on an unlimited number of devices. Sign in with your Steflix account to watch 
                    instantly on the web at Steflix.com from your personal computer or on any internet-connected device that 
                    offers the Steflix app, including smart TVs, smartphones, tablets, streaming media players and game consoles.
                    You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while 
                    you're on the go and without an internet connection. Take Steflix with you anywhere.
                </div>
            </details>
            <details>
                <summary>How do I cancel?</summary>
                <div class="text">
                    Steflix is flexible. There are no pesky contracts and no commitments. You can easily cancel 
                    your account online in two clicks. There are no cancellation fees – start or stop your account anytime.
                </div>
            </details>
            <details>
                <summary>What can I watch on Steflix?</summary>
                <div class="text">
                    Steflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Steflix 
                    originals, and more. Watch as much as you want, anytime you want. Join free for 30 days to see everything Steflix has to offer.
                </div>
            </details>
            <details>
                <summary>How does the free trial work?</summary>
                <div class="text">
                    Try us free for 30 days! If you enjoy your Steflix trial, do nothing and your membership will automatically continue 
                    for as long as you choose to remain a member. Cancel anytime before your trial ends and you won’t be charged. There’s no 
                    complicated contract, no cancellation fees, and no commitment. Cancel online anytime, 24 hours a day.
                </div>
            </details>
            
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
        <p style="text-align:center;">Copyrights reserved by &copy; Golban Stefan</p>  
       <script src="edit.js"></script>
</body>
</html>
