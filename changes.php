<?php
include_once("db_connection.php");
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['email'];
	$user_linkedin = $_POST['user_linkedin'];
	$sql = "SELECT * FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if(!isset($row['email'])){
		$sql = "UPDATE users SET user_name='$user_name', user_email='$user_email', user_linkedin='$user_linkedin' WHERE user_email='$user_email'";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn).$sql);
		echo "registered";
	} else {
		echo "fail";
	}
}
?>
