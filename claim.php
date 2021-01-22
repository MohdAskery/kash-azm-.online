<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
error_reporting(0);
$room_name=$_POST['room_name'];
if (strlen($room_name)>20 or strlen($room_name)<2 ) 
    {
	// start javascript alert
	         echo '<script>
				   alert("please choose name 2 to 20 Character!")
				  window.location="http://localhost/mychat";
			    </script>'; 
     }
  else if (!ctype_alnum($room_name)) 
    {
			// start javascript alert
	         echo '<script>
				   alert("please choose an  alphanumeric room name")
				  window.location="http://localhost/mychat";
			    </script>'; 
     }
     // start chattong code	
else
{
   // connect to database
	include 'connection.php';
}
$sql="SELECT * FROM `rooms` WHERE name='$room_name'";
$result=mysqli_query($conn,$sql);
if ($result) {
	// check data exist in the database
	if (mysqli_num_rows($result) >0) 
	    {
		
         // start javascript alert
	         echo '<script>
				   swal({
					  title: "!sorry",
					  text: "please choose an Different Room Name This Room Name is Already Exist in our Database",
					  icon: "warning",
					  button: "OK",
				     });
				  window.location="http://localhost/mychat";
			    </script>'; 
        }
        else
        {
        	$sql="INSERT INTO `rooms` (`name`, `date`) VALUES ('$room_name', current_timestamp());";
        	if (mysqli_query($conn,$sql)) 
        	{
        	   echo '<script>
				    alert("Your Room Is Created Successfully")
				    '.$url_sen.'window.location="http://localhost/mychat/rooms.php?roomname='.$room_name.'";
			    </script>';	

        	}
        	else
        	{
         
        	}
        }
}
else
{
  // echo "Error "mysql_error($conn);
	echo "!sorry Internal Server Error";
}
?>
</body>
</html>
