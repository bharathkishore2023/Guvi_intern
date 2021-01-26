<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    include_once("../Modules/db_connection.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logged in</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <style>
        <?php include '../public/css/bootstrap.min.css'; ?><?php include '../public/css/style.css'; ?>
    </style>
    <!-- external js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../Modules/changes.js"></script>
</head>

<body>
    <?php
    include_once("../Modules/db_connection.php");
    $e = $_SESSION['email'];
    if ($e != '') {
        $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            echo <<< EOF
    <div class="container-fluid">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding reg_form">
                        <form class="registerform_ajax" method="post" id="reg_form_ajax">
                            <div class="login-box">
                                <h5><span class="text_1">Your profile</span></h5>
                                <div id="error_mess">
                                    </div>
                                <div class="login-row row no-margin">
                                    <label for="Full Name">Full Name</label>
                                    <input type="user_name" name="user_name" id="user_name" class="form-control form-control-sm" autocomplete="name" >
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="user_email">user_email Address</label>
                                    <input type="user_email" name="user_email" id="user_email" class="form-control form-control-sm" autocomplete="user_name" >
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="LinkedIn">LinkedIn-URL</label>
                                    <input type="linkedin" name="linkedin"  id="linkedin" class="form-control form-control-sm" >
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="user_password">user_password</label>
                                    <input type="user_password" name="user_password" id="user_password" class="form-control form-control-sm" autocomplete="new-user_password" >
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="Confirm user_password">Confirm user_password</label>
                                    <input type="user_password" name="cuser_password" id="cuser_password" class="form-control form-control-sm" autocomplete="new-user_password" >
                                </div>
                                <div class="login-row btnroo row no-margin">
                                    <!-- <button class="btn btn-primary btn-sm" id="submit" value="Send"> Sign In</button> -->
                                    <button type="submit" class="btn btn-success btn-sm" name="create_acc" id="form_btn_submit">Create Account</button>
                                </div>
                                <div class="login-row donroo row no-margin">
                                    <p>Already have an account?<a href="login.php">&nbsp;Sign in</a></p>
                                </div>
                                <!-- <div class="login-row donroo row no-margin">
                                    <div id="error_mess">
                                    </div>
                                </div> -->
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

    EOF;
        }
    } else {
        echo <<< EOF
        <h1>please sign in before viewing profile !!!</h1>
        EOF;
    }
    ?>
    ?>
</body>
<!-- external js -->
<script type="text/javascript" src="../public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="reg_user_ajax.js"></script>
<script>
    <?php include '../public/js/popper.min.js'; ?>
    <?php include '../public/js/bootstrap.min.js'; ?>
</script>

</html>