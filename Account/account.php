
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script  src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/884756b987.js"></script>
    <link rel="icon" href="images/title.png">
    <link rel="stylesheet" href="account.css">
    <title>Steflix - Personal Account</title>
</head>
<body id="outside">
    <div class="toggle">
        <i class="fa fa-bars" id="toggle-bars"></i>
        <i class="fa fa-times" id="toggle-times"></i>
    </div>
    <nav>
        <div class="logo">
            <img src="../images/STEFLIX.png" alt="Steflix Logo">
        </div>
        <form class="search-case">
            <input class="search-bar" type="search" placeholder="What are you looking for?" autocomplete="on" autofocus>
            <button type="submit">
                <i class="fa fa-search" id="search-icon"></i>
            </button>
        </form>
        <ul class="nav-links">
            <li><a href="account.php">Home</a></li>
            <li><a href="Movies/popular movies/popular.php">Popular</a></li>
            <form action="../includes/logout.inc.php" method="post" data-netlify="true"><button type="submit" name="logout-submit">Logout</button></form>
        </ul>
    </nav>
    <div class="showcase-container">
        <div class="movie-details-showcase">
            <h1>Bloodshot</h1>
            <div class="movie-details">
                <p>Fantasy</p>
                <p>Action</p>
                <p>Adventure</p>
            </div>
            <div class="movie-buttons">
                <a href="https://youtu.be/vOUVVDWdXbo" class="watch-movie" target="_blank">Watch Movie</a>
                <a href="https://www.imdb.com/title/tt1634106/" class="movie-info" target="_blank">View Info</a>
            </div>
        </div>
    </div>
    <div class="categories">
        <a href="popular.html">Popular</a>
    </div>
    <div class="popular-movies">
        <div class="movie">
            <a href="https://youtu.be/C0BMx-qxsP4" target="_blank">
            <img src="https://s2dbox.xyz/pic/movie/cover/aToxNjY7.jpg" alt="john wick">john wick 1</a>
        </div>
        <div class="movie">
            <a href="https://youtu.be/-_DJEzZk2pc" target="_blank">
            <img src="https://s2dbox.xyz/pic/movie/cover/aTo2NDE3Ow.jpg" alt="joker">joker</a>
        </div>
        <div class="movie">
            <a href="https://youtu.be/t-8YsulfxVI" target="_blank">
            <img src="https://s2dbox.xyz/pic/movie/cover/aToxMDE0Ow.jpg" alt="exodus gods and kings">exodus gods and kings</a>
        </div>
        <div class="movie">
            <a href="https://www.youtube.com/watch?v=C0BMx-qxsP4" target="_blank">
            <img src="https://s2dbox.xyz/pic/movie/cover/aTo2MjM4Ow.jpg" alt="birds of prey">Hobbs & Shawn</a>
        </div>
        <div class="movie">
            <a href="https://youtu.be/-tnxzJ0SSOw" target="_blank">
            <img src="https://s2dbox.xyz/pic/movie/cover/aTo4ODI7.jpg" alt="the amazing spiderman">the amazing spiderman</a>
        </div>
    </div>
    <!--FOOTER-->
 <footer class="showcase-bottom">
    <div class="footer-items-showcase">
        <div class="footer-column-showcase">
            <a href="https://ncov19.netlify.app" target="_blank">Coronavirus Tracker (Steflix)</a>
        </div>
        <div class="footer-column-showcase">
            <a href="https://thunderstorms.netlify.app" target="_blank">Weather Map (Steflix)</a>
        </div>
        <div class="footer-column-showcase">
            <a href="account.php">Account</a>
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
<script src="acc.js"></script>
</body>
</html>