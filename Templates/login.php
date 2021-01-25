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
        <?php include '../public/css/bootstrap.min.css'; ?>
        <?php include '../public/css/style.css'; ?>
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <form action="" method="POST">
                            <div class="login-box">
                                <h5><span class="text_1_login">Welcome Back🖤</span></h5>
                                <div class="login-row row no-margin">
                                    <label for="Email">Email Address</label>
                                    <input type="email" name="email" class="form-control form-control-sm"  autocomplete="username" required>
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="Password">Password</label>
                                    <input type="password" name="password" class="form-control form-control-sm" autocomplete="new-password" required>
                                </div>
                                <div class="login-row btnroo row no-margin">
                                    <button class="btn btn-primary btn-sm" id="submit" value="Send">Log in</button>
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