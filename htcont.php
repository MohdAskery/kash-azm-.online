<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php error_reporting(0); ?>
<?php
$room = $_POST['room'];
//connecting to db
include 'connection.php';
$sql = "SELECT 	sno, msg, stime, ip, picsource FROM msgs WHERE room = '$room'";
$res = "";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
	while ($row = mysqli_fetch_assoc($result))
	{
		$pi=$row["picsource"];
		$ms=$row['msg'];
		$sno=$row['sno'];
		$ip=$row['ip'];
		$bl="";
		$res = $res . '<div class="container">';
		$res = $res . $row['ip'];
		$res = $res . "  says <p>".$row['msg'];
		$res = $res . '</p><span class="time-right" style="color:#0066ff;">' . $row["stime"].'</p></span></div>';
		$sqld= "DELETE FROM `msgs` WHERE `picsource` = 'img/'";
		mysqli_query($conn, $sqld);
		// $up="UPDATE `msgs` SET `picsource` = 'img/IMG_20200830_135125_1.jpg' WHERE `picsource` = 'img/IMG_20200830_134955.jpg';";
		mysqli_query($conn, $up);
		if ($pi!="") {
		$res = $res . '<div class="container">';
        $res = $res .'<img src='.$row["picsource"].' width="200" height="200" id="image" style="border-radius: 0px;">';
        $res = $res . '</p><span class="time-right" style="color:#0066ff;">' . $row["stime"].'</p></span></div>';
		}


		
	}
}
echo $res;

?>