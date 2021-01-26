<?php
include_once("db_connection.php");
$b = null;
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['password'];
	$linkedin = $_POST['linkedin'];
	$sql = "SELECT user_email FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if(!$row['user_email']){
		$sql = "INSERT INTO users(`user_name`, `user_email`,`linkedin`, `password`) VALUES ('$user_name', '$user_email','$linkedin', '$user_password')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
		if (isset($b)) {
			echo "registered";
	} else {
		echo "1";
	}
}
}
?>
