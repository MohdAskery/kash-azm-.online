<?php
$filename=$_FILES['uploadfile']['name'];
$tmp_name=$_FILES['uploadfile']['tmp_name'];
$folder="img/".$filename;
move_uploaded_file($tmp_name,$folder);
$sql = "INSERT INTO `msgs` VALUES ('$folder')";
mysqli_query($conn,$sql);
mysqli_close($conn);

?>