<?php
include_once("db_connection.php");
function test(){
	echo "working";
}
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$linkedin = $_POST['linkedin'];
	$user_password = $_POST['user_password'];
	$sql = "SELECT user_email FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("Database error check with DB:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if(!$row['user_email']){
		$sql = "INSERT INTO users(`user_name`, `user_email`, `linkedin`, `user_password`) VALUES ('$user_name', '$user_email',  '$linkedin', '$user_password')";
		mysqli_query($conn, $sql) or die("Database error check with DB:". mysqli_error($conn)."qqq".$sql);
		echo "Welcome you have been successfully registered";
	} else {
		echo "OOPS!! register fail";
	}
}
?>
