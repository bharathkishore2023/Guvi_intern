<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include_once("db_connection.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script type="text/javascript" src=".public/js/validation.min.js"></script>
    <script type="text/javascript" src="scripts/register.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <form role="form" method="post" action="login.php">
                            <div class="login-box">
                                <h5><span class="text_1_login">Welcome Back🖤</span></h5>
                                <div class="login-row row no-margin">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm">
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="password">Password</label>
                                    <input type="password" name="pass" id="password" class="form-control form-control-sm">
                                </div>
                                <div class="login-row btnroo row no-margin">
                                    <input type="submit" value="login" name="login" class="form-control form-control-sm">
                                    <a href="logout.php">logout</button>
                                </div>
                                <div class="login-row donroo row no-margin">
                                    <p>Don't have an account?<a href="register.php">&nbsp;Sign up</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7 col-md-6 img-box">
                        <img src="./public/images/signup.svg" alt="">
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

</html>

<?php
include("db_connection.php");
if (isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pass = $_POST['pass'];
    $check_user = "select * from users WHERE user_email='$user_email' AND user_pass='$password'";
    $run = mysqli_query($conn, $check_user);
    if (!$run || mysqli_num_rows($run) == 0) {
        header('Location: loggedin.php');
        $_SESSION['email'] = $user_email;
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>