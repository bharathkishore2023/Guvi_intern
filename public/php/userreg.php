<?php
include_once("db_connection.php");
if(isset($_POST['create_acc'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['email'];
	$user_linkedin = $_POST['user_linkedin'];
	$user_password = $_POST['user_password'];
	$sql = "SELECT * FROM users WHERE user_email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	if(!isset($row['user_email'])){
		$stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_linkedin, user_password) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $user_name, $user_email, $user_linkedin, $user_password);
		$stmt->execute();
		echo "registered";
	} else {
		echo "fail";
	}
}
?>
