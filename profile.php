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
    $sess = $_SESSION['email'];
    if ($sess != '') {
        $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            echo <<< EOF
            <div class="register_container">
            <form id="register-form" class="form-signin" method="POST">
                <div class="login-box">
                <h5><span class="text_p">Profile <img src="./public/images/logo.svg" style="width: 20px;"></span></h5>
                    <div class="login-row row no-margin">
                        <label for="username">User Name</label>
                        <input type="text" name="user_name" id="user_name" class="form-control form-control-sm" value='{$row['user_name']}'>
                    </div>
                    <div class="login-row row no-margin">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm" value='{$row['user_email']}'>
                    </div>
                    <div class="login-row row no-margin">
                    <label for="Linkedin">Linkedin-URL</label>
                    <input type="url" name="user_linkedin" id="user_linkedin" class="form-control form-control-sm" value='{$row['user_linkedin']}'>
                </div>    
                    <div class="login-row donroo row no-margin">
                    <a href="logout.php">Logout</a>
                    </div>
                </div>
            </form>
        </div>

EOF;
}
}else{
echo <<< EOF
<h1>please sign in !!!</h1>
EOF;
}
?>
        
</body>




</html>