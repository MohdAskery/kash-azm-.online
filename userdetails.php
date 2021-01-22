<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'connection.php';
$username=$_POST['name_user'];
$useremail=$_POST['email_user'];
$usermsg=$_POST['user_msg'];
$sql="INSERT INTO `contact_us` (`name`, `email`, `msg`) VALUES ('$username', '$useremail', '$usermsg');";
$resu=mysqli_query($conn,$sql);
if ($resu) {
	echo "<script type='text/JavaScript'>  
          alert('Thank you , we will get back to you as soon as possible!')
          window.location='http://localhost/mychat';
          </script>";
; 
	
}
?>