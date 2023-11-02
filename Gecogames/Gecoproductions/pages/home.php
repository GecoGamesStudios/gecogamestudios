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
    <title>Geco | production</title>
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
                                  <button type="button" class="btn btn-link"><a href="developers.php" class="text-dark">Careers</a></button>
                                 
                     
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
              <div class="text-title"><h3 class="text-center mr-0 ml-4">Geco games studios</h3></div>
        </div>
    </header>

   <div class="container">
    <div class="title">
            <h1 class="text-center text-info my-4">Games</h1>
    </div>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/elephant-illustration.jpg" alt="Los Angeles" width="1100" height="500" style="object-fit: fit-content; width:100%;">
            <div class="carousel-caption">
              <h3  style="color: black;">Inshila yamumana</h3>
              <p  style="color: black;">We provide a variety of communities to join under. Communities helps to mobilize social coordination within the community.</p>
            </div>    
          </div>
          <div class="carousel-item">
            <img src="../assets/sunrise.jpeg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Inshimu Two</h3>
              <p class="text-large">Play an undless game of shooting in the sky!</p>
              <button class="btn btn-info"><a href="#" class="text-light">Play now</a></button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/savanna.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3 style="color: white; font-weight: bold;">Blog news!</h3>
              <p  style="color: white; font-weight: bold;">A team of children just managed to conqure a team in the super league robotics.
                <br><a href="#'" class="text-primary">See more</a>
              </p>
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
    <div class="container my-4">
        <div class="title">
            <h1 class="text-center text-info">Community</h1>
        </div>
        <div class="cards my-4 text-center">
        <!-- community information here...-->
        <p  class="text-center">Join our vibrant team members and explore wonderful skills and knowledge out there</p>
        <div class="image"><img src="../assets/hands.webp" alt="" class="img-rounded mx-auto d-block" style=" height: 400px;"></div>
        <div class="btn-cards text-center my-4"><button class="btn btn-info"><a href="#" class="text-light">Join now</a></button></div>
    </div>
    </div>
    
   <div class="container">
      <div class="text-center">
                <h1 class="text-center">Contact us</h1>
        </div>
        <div class="container-details">
          <p class="text-center">Have questions? The quicker way to get in touch with us is using the contact information below.</p>
          <div class="#">
              <div class="text-center"><label  class="text-center">Email</label></div>
              <input type="email" name="email" id="email" placeholder="Enter email..." class="form-control text-center">
             <textarea name="text-area" id="" cols="30" rows="10" placeholder="Enter message..." class="my-4 text-center" style="width: 100%; height: 100px;"></textarea>
              <div class="text-center"><button type="submit" name="submit" class="btn btn-success text-center"><a href="#" class="text-light text-center">Submit</a></button></div>
          <p class=my-4>If you are a developer and need more experience, please use our <a href="">developers page</a> to find more skilled and tlented developers</p>

            <!-- contact us details...-->
        </div>
   </div>
   <!-- <div class="container">
        <div class="title">
            <h1 class="text-center">Support page</h1>
        </div>
        <div>-->
        <!-- Support page details...-->
       <div class="#">
            
              <div class="text-center" style=" height: 200px;">
                <i class="fas fa-question-circle"></i>
                <h3 class="text-center my-4">How can I get support for a game issue? </h3>
                <p class="text-center my-4">If you encounter any issues with our games, please contact our <a href="#">support team   </a>through the <a href="#" class=" text-success">live chat</a> or
                <a href="#" class=" text-danger">email.</a>
                </p>
              </div>
          
       </div>
        <div class="text-center my-4">
          <h3 class="text-center my-4">What payment methods do you accept?</h3>
          <p class="text-center my-4">We accept all major <a href="#"> credit cards</a> and <a href="#"> Mobile Money</a> for purchases on our website.</p>
        </div>
      </a>
    </div>
  </section>
        </div>
    </div>
    <div class="title">
            <h1 class="text-center text-info"> See developers</h1>
        </div>
        <div class="container my-4">
                <div class="container-details my-4">
              <h2 class="text-center">Join Our Team</h2>
              <p class="text-center">If you are passionate about game development and want to contribute your skills to exciting projects, we'd love to hear from you.</p>
              <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/group.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="text-primary" style="color: blue; font-size: bold;">Inshila yamumana</h3>
        <p class="text-primary" style="color: blue; font-size: bold;">We provide a variety of communities to join under. Communities helps to mobilize social coordination within the community.</p>
      </div>    
    </div>
    <div class="carousel-item">
      <img src="../assets/minecraft.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Inshimu Two</h3>
        <p class="text-large">Play an undless game of shooting in the sky!</p>
        <button class="btn btn-info"><a href="#" class="text-light">Play now</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/socialclub.webp" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>More updates</h3>
        <p>We love the Big Apple!</p>
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
              
              <div class="text-center">
                <button class="btn btn-primary my-4 text-center">Apply Now <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
   </div>

   <!--<div class="form">
        <h3 class="text-center">Subscribe to our newsletter</h3>
        <input type="email" name="" id="" placeholder="Enter your email..." class="form-control text-center my-4">
       <div class="text-center">
       <button class="btn btn-danger my-4"><a href="" class="text-light">Subscribe!</a></button>
       </div> 
   </div>-->

   <footer>
   <footer class="card">
        <div class="footer-container text-center my-4">
            <div class="footer-left">
                <h3>Contact Us</h3>
                <p>Email: info@gecogamesstudios.com</p>
                <p>Phone: +260978516926</p>
            </div>
            <div class="footer-center my-4">
                <h3>Follow Us</h3>
                <a href="#" style="color: rgb(11, 47, 109);" target="_blank"><i class="fab fa-facebook-f" title="facebook" style="font-size: 18px; padding-right:20px;"></i></a>
                <a href="#" style="color: rgb(0, 119, 255);" target="_blank"><i class="fab fa-twitter" title="twitter" style="font-size: 18px; padding-right:20px;"></i></a>
                <a href="#" style="color: maroon;" target="_blank"><i class="fab fa-instagram" title="instagram" style="font-size: 18px; padding-right:20px;"></i></a>
                <div class="form-type text-center">
                <h3 class="text-center">Subscribe to our newsletter</h3>
                <input type="email" name="" id="" placeholder="Enter your email..." class=" text-center">
              <div class="text-center">
              <a href="" class="text-danger my-3">Subscribe!</a>
              </div> 
   </div>

            </div>
            <div class="footer-bottom my-4">
              <div class="icons">
              <a href="#"><i class="fas fa-home" title="home" style="font-size: 18px; padding-right:20px; color: black;"></i></a>
              <a href="#"><i class="fas fa-gamepad" title="games" style="font-size: 18px; padding-right:20px; color: #17a2b8;"></i></a>
              <a href="#"><i class="fas fa-envelope" title="contact us" style="font-size: 18px; padding-right:20px;"></i></a>
              <a href="#"><i class="fas fa-question-circle" title="about us" style="font-size: 18px; padding-right:20px; color: #28a745;"></i></a>
              <a href="#"><i class="fas fa-code" title="developer's page" style="font-size: 18px; padding-right:20px;"></i></a>
              <a href="#"><i class="fas fa-thumbs-up" title="support page" style="font-size: 18px; padding-right:20px; color: #dc3545;"></i></a>
              </div>
                <p>&copy; 2023 Geco Games. All rights reserved.</p>
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
            </div>
        </div>
      
    </footer>
</body>
</html>