<?php
// connect to database
error_reporting(0);
	include 'connection.php';
$msg=$_POST['text'];
$room=$_POST['room'];
$ip=$_POST['ip'];
$fil=$_POST['file'];
$sql = "INSERT INTO `msgs`(`msg`, `room`, `ip`, `stime`,`picsource`) VALUES ('$msg' , '$room' , '$ip' , CURRENT_TIMESTAMP,'$fil');";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>