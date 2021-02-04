<?php
session_start();
include("db_connection.php");
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email1']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password1']);
    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '" . $user_email . "' and user_password = '" . $user_password . "'");
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['email'] = $row['user_email'];
        echo "LoginSuccess";
    } else {
        echo "Fail";
    }
?>