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
    <title>Forms | GECO</title>
    <style>
        .form-text {
            display: flex;
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

                                  <button type="button" class="btn btn-link"><a href="signup.php" class="text-dark">About us</a></button>
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
              <div class="text-title"><h3 class="text-center mr-0 ml-4">Log-in Form</h3></div>
        </div>
    </header>



  <div class="container card my-4">
  <div class="form">
    <form action="">
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your full name" class="form-control">
        <label>Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
        <label>Password</label>
        <input type="password" name="password" id="pssword" placeholder="password" class="form-control">
    
        <div class="form-text">
        <button type="button" class="btn btn-outline-primary my-4">Submit</button></p>
             <div class="container">
                <!-- Button to Open the Modal -->
                <p class="my-4 ml-3">Forgot password? <button type="button" class="btn btn-outline-danger border-0 my-4" data-toggle="modal" data-target="#recoverModal">
                    recover!
                </button>

                <!-- The Modal -->
                <div class="modal" id="recoverModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Recover password</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                       <div class="form-group">
                        <p>Enter email to recover password</p>
                        <input type="email" name="email" id="email" placeholder="Enter your email..." class="form-control">
                        <button type="submit" class="btn btn-success my-4 text-center"><a href="#" class="text-light">Submit</a></button>
                       </div>
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
        <div class="create">
            
            
                <div class="container">
                <!-- Button to Open the Modal -->
                <p>don't have account? <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#createModal">create account</button></p>
            

                <!-- The Modal -->
                <div class="modal" id="createModal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Create account</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-goup">
                                    <form action="get" method="post">
                                        <label for="name">First Name</label>
                                        <input type="text" name="name" id="name" placeholder="Enter your firstname..." class="form-control">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname..." class="form-control">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" placeholder="Enter your email address..." class="form-control">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Enter your password..." class="form-control">
                                        <label for="password">Confirm password</label>
                                        <input type="password" name="password" id="password" placeholder="Confirm your password..." class="form-control">
                                        <button type="submit" class="btn btn-outline-primary my-3"><a href="user.php" class="text-primary">Create</a></button>
                                    </form>
                                </div>
                            </div>
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
    </form>
  </div>
  </div>
    

  

    <footer class="card">
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