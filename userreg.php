<?php
include_once("db_connection.php");
$user_email - $_GET['user_email'];
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['email'];
	$user_linkedin = $_POST['user_linkedin'];
	$user_password = $_POST['user_password'];
	$sql = "SELECT * FROM users WHERE user_email='$email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	print_r($row);
	if(!$row['email']){
		$sql = "INSERT INTO users (`user_name`, `user_email`, `user_linkedin`, `user_password`) VALUES ('".$user_name."','".$user_email."', '".$user_linkedin."', '".$user_password."')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
		echo "registered";
	} else {
		echo "1";
	}
}
?>
