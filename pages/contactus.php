<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Contact Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../css/contactus.css">
        <link rel="stylesheet" href="../css/ navigations.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
    <body>
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
    
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cumque recusandae
                    2 ipsa ex sequi impedit beatae, veritatis placeat ab eum debitis ut dolor veniam.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>32241 zanimone west Road,<br>Royal,Medical,<br>55089 </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>phone</h3>
                            <p>+260 978-193-112</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                       <div class="text">
                            <h3>Email</h3>
                            <p>Raymondmaposa5@gmail.com</p>
                        </div>
                    </div>                    
                </div>
                <div class="contacForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type Your Message...</span>
                        </div>
                        <div class="inputBox">
                            <div class="inputBox">
                                <input type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
    </body>
</html>