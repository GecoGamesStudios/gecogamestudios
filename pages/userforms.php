<?php 
    require '../server/register.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login & Signup Form</title>
        <link rel="stylesheet" href="../css/users.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title signup">Signup Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slider" id="login" checked>
                    <input type="radio" name="slider" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slide-tab"></div>
            </div>
                <div class="form-inner">
                    
                    <form action="#" class="login">
                        <div class="feild">
                            <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="feild">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link"><a href="#">Forgot password?</a></div>
                        <div class="feild">
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
                    </form>
                    <form action="../server/register.php" method="post" class="signup">
                    <div class="feild">
                            <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="feild">
                            <input type="text" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="feild">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="feild">
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <div class="feild">
                            <input type="submit" name="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../js/main.js"></script>
    </body>
</html>