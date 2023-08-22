<?php
    require('connection.php');

    if(isset($_REQUEST['username'])) {

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $emal = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $confirm_password = stripslashes($_REQUEST['confirm_password']);
        $confirm_password = mysqli_real_escape_string($con, $confirm_password);

        if(empty(trim($username))) {
            $username_error = "Username field is empty";
        }
        if(empty(trim($username))) {
            $email_error = "Username field is empty";
        }

        if ($password != $confirm_password) {
            $password_error =  "passwords do not match, check password";
        }
        else {
            $query = "INSERT into `users` (username, email, password) VALUES ('$username','$email','" .md5($password)."')";
            $result = mysqli_query($con, $query);

            if ($result) {
                header("Location: '../pages/userforms.php'");
                $success = "Thank you for registering please login";
            } else {
                header("Location: '../pages/userforms.php'");
            }
        }

    }

?>