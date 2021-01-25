<?php
include_once("db_connection.php");
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$linkedin = $_POST['linkedin'];
	$sql = "SELECT user_email FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if($conn){
		$sql = "UPDATE users SET user_name='$user_name',user_email='$user_email',linkedin='$linkedin' WHERE user_email='$user_email'";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
		echo "registered";
	} else {
		echo "1";
	}
}
?>
