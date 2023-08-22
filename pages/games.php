<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/games.css">
    <link rel="stylesheet "type="text/css" href="../css/ navigations.css"> 
    <link rel="stylesheet" href="../css/footer.css">
    <title>Geco games page</title>
</head>
<body>
<div class="games">
<header>
    <div class="logo">
        <a href="../index.php">
            <img src="../assets/logos/black.png" alt="geco-games-studios">
        </a>
     </div>
        <!--three line hambuger menu-->
        <div class="hamburger-container">
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <!--Navigation links-->
        <div class="navigation-wrapper">
                <nav class="navigation-menu">
                    <a href="../index.php">Home</a>
                    <a href="../pages/games.php">Games</a>
                    <a href="../pages/community.php">Community</a>
                    <a href="../pages/contactus.php">Contact Us</a>  
                    <a href="../pages/support.php">Support</a>
                    <a href="../pages/developus.php">Developers</a></li>
                    <div class="user-login">
                        <a href="../pages/userforms.php">Log In</a>
                        <a href="../pages/userforms.php">Sign Up</a>
                    </div>
            </nav>
    </div>
</header>
    <div class="slideshow-container">
        <div class="slide fade">
            <img src="../assets/images/inshimu.png" alt="inshimu">
            <div class="slide-caption">Inshimu 2</div>
        </div>
        <div class="slide fade">
            <img src="../assets/images/LetterLoop.png" alt="LetterLoop">
            <div class="slide-caption">Letter Loop world tour</div>
        </div>
        <div class="slide fade">
            <img src="../assets/images/ourlastprayer.png" alt="our last preayer arena">
            <div class="slide-caption">our last prayer arena</div>
        </div>
    </div>
    <main>
        <section class="game-card">
            <img src="../assets/images/inshimu.png" alt="inshimu">
            <h2>INSHIMU 2</h2>
            <p>Inshimu Villa is in dire need of assistance as it faces an attack from the destructive Sap Obstacles. The Bee Team awaits your command to utilize the Stinger Cannons and protect the villa by relentlessly shooting down these threats.</p>
            <a href="https://play.google.com/store/apps/details?id=com.GecoGames.Inshimu">Download now</a>
        </section>
        <section class="game-card">
            <img src="../assets/images/ourlastprayer.png" alt="our last prayer">
            <h2>OUR LAST PRAYER ARENA</h2>
            <p>Experience the adrenaline of "Our Last Prayer," an exclusive 2D mobile multiplayer shooter game. Test your reflexes and strategy in captivating game. 
            </p>
            <a href="https://play.google.com/store/apps/details?id=com.GECOGamesLLC.OurLastPrayer">Download Now</a>
        </section>
        
        <section class="game-card">
            <img src="../assets/images/LetterLoop.png" alt="letter loop world tour">
            <h2>LETTER LOOP WORLD TOUR</h2>
            <p>"Letter Loop" is an addictive word game that combines captivating story scenes with challenging puzzles, including word searches, anagrams, and crosswords.</p>
            <a href="https://play.google.com/store/apps/details?id=com.GecoGames.LetterLoopWorldTour&hl=en_US">Download Now</a>
        </section>
    
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h3>Contact Us</h3>
                <p>Email: info@gecogamesstudios.com</p>
                <p>Phone: +260978516926</p>
            </div>
            <div class="footer-center">
                <h3>Follow Us</h3>
                <a href="#" style="color: rgb(11, 47, 109);" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" style="color: rgb(0, 119, 255);" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" style="color: maroon;" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Geco Games. All rights reserved.</p>
            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
        </div>
        <button id="back-to-top-btn" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>

    </footer>
    <script src="../js/gamesshow.js"></script>
</div>

</body>
</html>