<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Games | GECO</title>

    <style>

        .available-games img { 
            width: 100%;
            height: 400px;
            padding-right: 40px;
            margin-left: 20px;
        }

        .container-games {
            display: flex;
            
        }

        @media screen and (max-width: 767px) {

              .available-games img { 
            width: 100%;
            height: 400px;
            margin-left: 20px;
        }
        .container-games {
            display: block;
            
            
        }
        }

.container-two .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #007bff;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container-two .btn:hover {
  background-color: black;
  color: white;
}
</style>
</head>
<body>
<header>
        <div class="card-header" style="border: 1px solid #black; border-radius: 10px">
                <div class="navigation-links">
                        <img src="../assets/black.png" alt="Image Logo" class="rounded" style="width: 100px; height: 80px;">
                        <button type="button" class="btn btn-link"><a href="home.php" class="text-dark">Home</a></button>
                                  <button type="button" class="btn btn-link"><a href="games.php" class="text-dark">Games</a></button>
                                  <button type="button" class="btn btn-link"><a href="community.php" class="text-dark">Community</a></button>
                                  <button type="button" class="btn btn-link"><a href="contactus.php" class="text-dark">Contact us</a></button>
                                  <button type="button" class="btn btn-link"><a href="support.php" class="text-dark">Support</a></button>
                                  <button type="button" class="btn btn-link"><a href="developers.php" class="text-dark">Developers</a></button>
                     
                     <div class="user-login my-4">
                     <button type="button" class="btn btn-link"><a href="login.php" class="text-dark">Login</a></button>
                                  <button type="button" class="btn btn-link"><a href="signup.php" class="text-dark">Signup</a></button>
                     </div> 
                </div>
                <div class="dropdown">
                        <button type="button" class="btn btn-link" data-toggle="dropdown" class="text-dark">
                          <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu">
                                  
                                  <button type="button" class="btn btn-link"><a href="home.php" class="text-dark">Home</a></button>
                                  <button type="button" class="btn btn-link"><a href="games.php" class="text-dark">Games</a></button>
                                  <button type="button" class="btn btn-link"><a href="community.php" class="text-dark">Community</a></button>
                                  <button type="button" class="btn btn-link"><a href="contactus.php" class="text-dark">Contact us</a></button>
                                  <button type="button" class="btn btn-link"><a href="support.php" class="text-dark">Support</a></button>
                                  <button type="button" class="btn btn-link"><a href="developers.php" class="text-dark">Developers</a></button>
                                  <button type="button" class="btn btn-link"><a href="login.php" class="text-dark">Login</a></button>
                                  <button type="button" class="btn btn-link"><a href="signup.php" class="text-dark">Signup</a></button>
                      </div>
              </div>
              <div class="text-title"><h3 class="text-center mr-0 ml-4">Geco Games Hub!</h3></div>
        </div>
    </header>
    <div class="container">
        <div class="card w-100 rounded my-4">
        <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/inshimu.png" alt="inshimu" width="1100" height="500" style="object-fit: fit-content; width:100%;">
                                <div class="carousel-caption">
                                <h3  style="color: black;">Inshimu 2 out now on all platforms..</h3>
                                <p  style="color: black;"> Download on playstore and apple store for an endless of fun in the skies!!! Be the one to change and lead a community channel..<a href="read_more.php">Read more</a></p>
                                <button type="submit" class="btn btn-outline-primary"><a href="#" class="text-light">Download</a></button>
                            </div>    
                </div>
                <div class="carousel-item">
                    <img src="../assets/ourlastprayer.png" alt="lastprayer" width="1100" height="500">
                    <div class="carousel-caption">
                            <h3>Our last prayer</h3>
                            <p class="text-large">Join an acade clan and community to compete in this amazing shooting game. Be part of something <em>Extraordinary!</em></p>
                            <button class="btn btn-info"><a href="#" class="text-light">Download to join</a></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/letterloop.png" alt="letterloop" width="1100" height="500">
                    <div class="carousel-caption">
                            <h3 style="color: black; font-weight: bold;">A mind thrilling game!</h3>
                            <p  style="color: black; font-weight: bold;">Download Letterloop and follow the streem to unlocking your full potential of thinking capacity..</p>
                            <button class="btn btn-info"><a href="#" class="text-light">Download</a></button>
                    </div>   
                </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
        </div>   
        </div>
    </div>

    <div class="container text center my-4">
        <h2 class="text-center  my-4">Latest News:</h2>
        <div class="card text-center border-0">
            <img src="../assets/game_group.jpeg" alt="" height="400" class="rounded my-4 w-100">
            <p>A group of kids managed to qualify to compete in a tournament for a prize,<br> can they make it? Be part of the winning team.!</p>
            <button class="btn btn-primary mx-auto"><a href="#" class="text-light">See clan</a></button>
        </div>
        <div class="card border-0">
            <!--video clips-->
           <!-- <video src="#">Inshimu</video> -->
         <!--  <div class="carousel-item">
                    <img src="../assets/insider.jpg" alt="" height="400" class="rounded my-4 w-100 ">
                    <div class="carousel-caption">
                            <h3>Geco gamepasses</h3>
                            <p class="text-large">Good news! Buy our game <br> passes and enjoy the best. </p>
                            <button class="btn btn-info"><a href="#" class="text-light">Buy</a></button>
                    </div>
                </div>-->
        <div class="container-two text-center border border-light rounded my-4">
            <p>Set your mind at peace and join community channels to associate yourself <br>with individuals of open mind about games and tech. Be part of them and be the change.</p>
            <img src="../assets/game_group.jpeg" alt="" height="400" class="rounded w-100">
            <button class="btn btn-primary mx-auto"><a href="#" class="text-light">Join now!</a></button>
        </div>
                
        </div>
    </div>

    <h3 class="text-center">Available games:</h3>
        <div class="container-games text-center">
            
            <div class="available-games">
                <h4>Inshimu 2</h4>
                <img src="../assets/letterloop.png" alt="" class="rounded ">
                <p>Download inshimu to follow the root of the sky</p>
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#lastprayerModal">
                        Download
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="lastprayerModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Download Ourlast pryer</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <button type="button" class="btn btn-primary">Download for android</button>
                            <button type="button" class="btn btn-primary">Download for iOS</button>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    
                    </div>

            </div>

            <div class="available-games">
                <h4>Our Last prayer Arena</h4>
                <img src="../assets/minecraft.jpg" alt="" class="rounded">
                <p>Download to be the best in the shooting area</p>
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#letterloopModal">
                        Download
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="letterloopModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Download Letterloop</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <button type="button" class="btn btn-primary">Download for android</button>
                            <button type="button" class="btn btn-primary">Download for iOS</button>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    
                    </div>

            </div>

            <div class="available-games">
                <h4>Letterloop</h4>
                <img src="../assets/elephant-illustration.jpg" alt="" class="rounded">
                <p>Be the master of mind games. Follow inshila yamumana to unlock your knowlege</p>
                <div class="container">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#inshimuModal">
                        Download
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="inshimuModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Download Inshimu</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            <button type="button" class="btn btn-primary">Download for android</button>
                            <button type="button" class="btn btn-primary">Download for iOS</button>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    
                    </div>

            </div>
        </div>    





    <footer class="card my-4">
        <div class="footer-container text-center my-4">
            <div class="footer-left">
                <h3>Contact Us</h3>
                <p>Email: info@gecogamesstudios.com</p>
                <p>Phone: +260978516926</p>
            </div>
            <div class="footer-center my-4">
                <h3>Follow Us</h3>
                <a href="#" style="color: rgb(11, 47, 109);" target="_blank"><i class="fab fa-facebook-f" title="facebook"></i></a>
                <a href="#" style="color: rgb(0, 119, 255);" target="_blank"><i class="fab fa-twitter" title="twitter"></i></a>
                <a href="#" style="color: maroon;" target="_blank"><i class="fab fa-instagram" title="instagram"></i></a>
                <div class="form-type text-center">
                <h3 class="text-center">Subscribe to our newsletter</h3>
                <input type="email" name="" id="" placeholder="Enter your email..." class=" text-center">
              <div class="text-center">
              <a href="" class="text-danger my-3">Subscribe!</a>
              </div> 
   </div>
<footer>
            </div>
            <div class="footer-bottom my-4">
              <div class="icons">
              <a href="#"><i class="fas fa-home" title="home"></i></a>
              <a href="#"><i class="fas fa-gamepad" title="games"></i></a>
              <a href="#"><i class="fas fa-envelope" title="contact us"></i></a>
              <a href="#"><i class="fas fa-question-circle" title="about us"></i></a>
              <a href="#"><i class="fas fa-code" title="developer's page"></i></a>
              <a href="#"><i class="fas fa-thumbs-up" title="support page"></i></a>
              </div>
                <p>&copy; 2023 Geco Games. All rights reserved.</p>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
      
    </footer>
</body> 
</html>