<!doctype html>
<html lang="en">

<head>
    <?php
    include_once("db_connection.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign up</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <style>
        <?php include './public/css/bootstrap.min.css'; ?><?php include './public/css/style.css'; ?>
    </style>
    <!-- external js -->
    <script type="text/javascript" src="./public/js/validation.min.js"></script>
    <script type="text/javascript" src="scripts/register.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="register_container">
                            <form id="register-form" class="form-signin" method="POST">
                                <div class="login-box">
                                    <h5><span class="text_1_login">Welcome Back <img src="./public/images/logo.svg" style="width: 20px;"></span></h5>
                                    <div class="login-row row no-margin">
                                        <label for="username">User Name</label>
                                        <input type="text" name="user_name" id="user_name" class="form-control form-control-sm">
                                    </div>
                                    <div class="login-row row no-margin">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm">
                                    </div>
                                    <div class="login-row row no-margin">
                                        <label for="Linkedin">LinkedIn-URL</label>
                                        <input type="text" name="user_linkedin" id="user_linkedin" class="form-control form-control-sm">
                                    </div>
                                    <div class="login-row row no-margin">
                                        <label for="password">Password</label>
                                        <input type="password" name="user_password" id="user_password" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="login-row row no-margin">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="login-row btnroo row no-margin">
                                        <button class="btn btn-primary btn-sm" name="create_acc" id="btn-submit" value="submit">Sign up</button>
                                        <!-- <button class="btn btn-success btn-sm"> Create Account</button> -->
                                    </div>
                                    <div class="login-row row no-margin">
                                        <div id="error"></div>
                                    </div>
                                    <div class="login-row donroo row no-margin">
                                        <p>Already have an account<a href="login.php">&nbsp;Log in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="./public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="scripts/register.js"></script>
<script>
    <?php include './public/js/popper.min.js'; ?>
    <?php include './public/js/bootstrap.min.js'; ?>
</script>

</html>