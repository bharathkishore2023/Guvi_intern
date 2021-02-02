<?php
session_start();
?>
<?php
    include_once("db_connection.php");
    $sess = $_SESSION['email'];
    if ($sess != '') {
        $sql = "SELECT * FROM users WHERE user_email = '{$_SESSION['email']}'";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $p_name = $row['user_name'];
            $p_email = $row['user_email'];
            $p_linkedin = $row['user_linkedin'];
        }
    }
?>