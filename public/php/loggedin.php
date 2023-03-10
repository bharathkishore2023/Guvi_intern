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
    <title>Logged in</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="">
    <!-- external css -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- external js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="scripts/update.js"></script>
</head>

<body>
    <?php
    include_once("db_connection.php");
    $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
    $res = mysqli_query($conn, $sql);
    $red = "";
    while ($row = mysqli_fetch_array($res)) {
        $red  = $row['user_email'];
    }
    if ($red == $_SESSION['email']) {
        $sql1 = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
        $res1 = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res1)) {
    ?>
            <div class="container-fluid">
                <div class="container">
                    <div class="col-xl-10 col-lg-11 mx-auto login-container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 no-padding">
                                <div class="register_container">
                                    <form id="register-form" class="form-signin" method="POST">
                                        <div class="login-box">
                                            <h5><span class="text_1_login">Welcome Back <img src="./public/images/logo.svg" style="width: 20px;"></span></h5>
                                            <div class="card border-dark mb-3" style="max-width: 20rem;">
                                                <div class="card-body text-center text-info font-weight-normal">
                                                    <p class="card-text" id="Welcome"></p>
                                                    <p class="card-text" id="WelcomeN"></p>
                                                </div>
                                            </div>
                                            <div class="login-row row no-margin">
                                                <label for="username">User Name</label>
                                                <input type="text" name="user_name" id="user_name" class="form-control form-control-sm" value='<?php echo $row['user_name'] ?>'>
                                            </div>
                                            <div class="login-row row no-margin">
                                                <label for="email">Email Address</label>
                                                <input type="email" name="email" id="email" class="form-control form-control-sm" value='<?php echo $row['user_email'] ?>'>
                                            </div>
                                            <div class="login-row row no-margin">
                                                <label for="Linkedin">LinkedIn-URL</label>
                                                <input type="text" name="user_linkedin" id="user_linkedin" class="form-control form-control-sm" value='<?php echo $row['user_linkedin'] ?>'>
                                            </div>
                                            <div class="login-row btnroo row no-margin">
                                                <button class="btn btn-primary btn-sm" name="create_acc" id="btn-submit" value="submit">Update / View profile</button>
                                            </div>
                                            <div class="login-row donroo row no-margin">
                                                <a class="btn btn-warning btn-sm" href="logout.php" id="Logout" role="button" onclick="localStorage.clear();">Logout</a>
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
        <?php } ?>
    <?php
    } else {
        echo '<div class="login-row row no-margin" style="text-align: center"><h1 class="alert alert-danger">Check with your email and password</h1></div>';
        echo '<div class="text-center"><a class="btn btn-primary btn-lg" href="index.php" role="button">Back To Home</a></div>';
    }
    ?>
</body>
<script>
    if (localStorage.email) {
        document.getElementById('Welcome').innerHTML += " Logged in as " + localStorage.getItem('email');
    } else {
        document.getElementById('WelcomeN').innerHTML += " Log in Please!!" ;
    }
</script>

</html>