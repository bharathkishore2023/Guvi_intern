<?php
session_start(); //session starts here
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <style>
        <?php include '../public/css/bootstrap.min.css'; ?><?php include '../public/css/style.css'; ?>
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <form action="login.php" method="POST">
                            <div class="login-box">
                                <h5><span class="text_1_login">Welcome Back🖤</span></h5>
                                <div class="login-row row no-margin">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm" autocomplete="user_name" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="password">Password</label>
                                    <input type="password" name="pass" id="password" class="form-control form-control-sm" autocomplete="new-user_password" required>
                                </div>
                                <div class="login-row btnroo row no-margin">
                                    <button class="btn btn-primary btn-sm" id="submit" value="login">Log in</button>
                                    <!-- <button class="btn btn-success btn-sm"> Create Account</button> -->
                                </div>
                                <div class="login-row donroo row no-margin">
                                    <p>Don't have an account?<a href="register.php">&nbsp;Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7 col-md-6 img-box">
                        <img src="../public/images/signup.svg" alt="">
                    </div>
                </div>
                <div class="card  alert-info align-baseline">
                    <div class="card-body">
                        <p>By: <a href="https://saravananvijayamuthu.herokuapp.com/">Saravanan Vijayamuthu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- external js -->
<script>
    <?php include '../public/js/popper.min.js'; ?>
    <?php include '../public/js/bootstrap.min.js'; ?>
</script>

</html>

<?php

include("../Modules/db_connection.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pass = $_POST['pass'];
    $check_user = "select * from users WHERE user_email='$user_email'AND user_pass='$user_password'";
    $run = mysqli_query($conn, $check_user);
    if (!$run || mysqli_num_rows($run) == 0) {
        echo "<script>window.open('sucessfulregister.php','_self')</script>";
        $_SESSION['email'] = $user_email; //here session is used and value of $user_email store in $_SESSION.
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>