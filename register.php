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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/register.js"></script>
</head>

<body>
<div class="reg-form">
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <form class="registerform-ajax" action="userreg.php" method="post" id="register-form">
                            <div class="login-box">
                                <h5><span class="text_1">Welcome🖤</span></h5>
                                <div class="login-row row no-margin">
                                    <label for="Full Name">Full Name</label>
                                    <input type="text" class="form-control form-control-sm" name="user_name" id="user_name" />
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="user_email">Email Address</label>
                                    <input type="email" class="form-control form-control-sm"  name="user_email" id="user_email" />
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="LinkedIn">LinkedIn-URL</label>
                                    <input type="linkedin" class="form-control form-control-sm" name="linkedin"  id="linkedin" />
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password" id="password"/>
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="Confirm passowrd">Confirm Password</label>
                                    <input type="password"  class="form-control form-control-sm" name="cpassword" id="cpassword"/>
                                </div>
                                <div class="login-row btnroo row no-margin">
                                    <button type="submit" class="btn btn-success btn-sm" name="create_acc" id="form_btn_submit">Create Account
                                    </button>
                                </div>
                                </div>
                                    <div id="error_mess">
                                </div>
                                <div class="login-row donroo row no-margin">
                                    <p>Already have an account?<a href="login.php">&nbsp;Sign in</a></p>
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
    </div>
    <?php
    include("createjson.php");
    ?>

</body>
    <!-- external js -->
    <script type="text/javascript" src="./public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./Modules/register.js"></script>
<script>
    <?php include './public/js/popper.min.js'; ?>
    <?php include './public/js/bootstrap.min.js'; ?>
</script>
</html>