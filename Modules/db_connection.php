<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PSW = "sarvi";
$DB_NAME = "guvi";
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PSW, $DB_NAME) or die("Connection refused -check your connection credentials-: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connection refused -check your connection credentials-: %s\n", mysqli_connect_error());
    exit();
}
?>