<?php error_reporting(0); ?>
<?php
// connect to database
include 'connection.php';
$roomname=$_GET['roomname'];
$sql="SELECT * FROM `rooms` WHERE name='$roomname'";
$result=mysqli_query($conn,$sql);
	if($result)
	{
      if (mysqli_num_rows($result)==0) {
           echo '<script>
				   swal({
					  title: "!sorry",
					  text: "This Room does not Exist in our Database",
					  icon: "warning",
					  button: "OK",
				     });
				  window.location="http://localhost/mychat";
			    </script>'; 
      }
	}
	else
	{
		echo "Error".mysqli_error();
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
      
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass{
	height: 400px;
	overflow-y: scroll;
  /*border:2px solid #00ffff;*/
}
#button-s
{
  display: none;
}
#inputf
{
  border:none;
  padding: 0px;
  color: #fff;
  font-size: 1px;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
  width: 0px;
  height: 0px;
}
#inputf:focus
{
  outline:none;
}
#file
{

}
#myInput
{
  border:none;
  font-size: 1px;
  color:#fff;
  padding:0px;
  margin: 0px;
    background-color:#003333;
  color:#003333;

}
#room_show
{
  color:#e6e6e6;
  text-align: center;
  justify-content: center;
  margin-top: -10px;

}
.margin-p
{
  margin: auto;
}
#high
{
  color: #00ffff;
  text-decoration: underline;
}
.b-s-w
{
  width: 50px;
  padding: 6px;
  margin-top: 0px;
  border-radius:0px 5px 5px 0px;
float: right;

}
.GO-TEXT
{
  width: 85%;
}
.oimg
{
  float-right;
}
@media(max-width: 600px) {
  
.b-s-w
{
 
margin-left: -1px;
float: left;
} 
.GO-TEXT{
   width: 100%;
  }
  .oimg
  {
    margin-left: 0px;
    float: left;
  }

}
</style>
</head>
<body>
<div class="form-group">
  <link rel="stylesheet" type="text/css" href="imagep.css">
   <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <input type="text"  value="techahideas.in" id="myInput"s id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
<!-- <input type="text" value="URL" id="myInput"> -->
<button style="margin-top: -40px;" type="button" onclick="myFunction()" class="btn btn-primary">Copy room URL</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
  
    <!-- jQuery code to show  
      the working of this method -->
    <script> 
        
    function getURL() {
        // alert("The URL of this page is: " + window.location.href);
        document.getElementById("hi-in-data").innerHTML(window.location.href);
    }


    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<button id="button-s">Click Here!</button>
<!-- <button type="button" onclick="getURL();">Get Page URL</button> --> 
<h1 id="hi-in-data"></h1>
<h6 id="room_show"><span id="high">Room Name</span> <?php echo $roomname ?></h6>


<div class="container" style="background: -webkit-linear-gradient(left, #a445b2, #fa4299);">
	<div class="anyClass">
  <span class="time-right">11:00</span>
</div>
</div>
<form method="post">
<textarea rows="1" cols="1" class="form-control float-left msg-fds GO-TEXT" name="usermsg" id="usermsg1" placeholder="Add message" name="massage-text-a" required></textarea>
<!-- <input class="btn btn-primary float-right" type="submit" id="submitmsg" value="Upload"> -->

<button class="btn btn-primary b-s-w" type="submit" name="submitmsg" id="submitmsg"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
</form>
<!-- <input class="btn btn-primary float-right" type="submit" id="submitmsg" value="Upload"> -->

<form action="" method="post" enctype="multipart/form-data">
<!-- <input type="file" id="file" class="float-right" name="uploadfile"  accept="image/*" required=""ss>
<div>
  <input type="text" name="title" class="float-right">
  <input class="btn btn-primary float-right" type="submit" id="uploadfile-b" name="submitmsg" value="image">
 </div></form> -->
 <button class="image oimg" onclick="document.getElementById('id01').style.display='block'" style="width: 60px;height: 37px; padding: 0px; margin-top: 0px; background-color: #007bff;"><i style="font-size: 37px; color: #fff;" class="fa fa-camera" aria-hidden="true"></i></button>

<div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
       <div class="container13 margin-p">
      <div class="wrapper">
        <div class="image">
          <img src="" alt="">
        </div>
<div class="content">
          <div class="icon">
<i class="fas fa-cloud-upload-alt"></i></div>
<div class="text">
No file chosen, yet!</div>
</div>
<div id="cancel-btn">
<i class="fas fa-times"></i></div>
<div class="file-name">
File name here</div>
</div>
<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
      <input id="default-btn" type="file" hidden name="uploadfile"  accept="image/x-png,image/gif,image/jpeg" required="">
      <input type="text" name="title" class="float-right" placeholder="Image title">
  <input class="btn btn-primary" type="submit" id="uploadfile-b" name="submitmsg" value="Send image">
    </div>
<script>
      const wrapper = document.querySelector(".wrapper");
      const fileName = document.querySelector(".file-name");
      const defaultBtn = document.querySelector("#default-btn");
      const customBtn = document.querySelector("#custom-btn");
      const cancelBtn = document.querySelector("#cancel-btn i");
      const img = document.querySelector("img");
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      function defaultBtnActive(){
        defaultBtn.click();
      }
      defaultBtn.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            img.src = result;
            wrapper.classList.add("active");
          }
          cancelBtn.addEventListener("click", function(){
            img.src = "";
            wrapper.classList.remove("active");
          })
          reader.readAsDataURL(file);
        }
        if(this.value){
          let valueStore = this.value.match(regExp);
          fileName.textContent = valueStore;
        }
      });
    </script>

</div>
</form>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--  ==========================================================



 [[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]] -->

<?php
error_reporting(0);
$filename=$_FILES['uploadfile']['name'];
$tmp_name=$_FILES['uploadfile']['tmp_name'];
$folder="img/".$filename;
move_uploaded_file($tmp_name,$folder);
echo "<input type='text' id='inputf' class='hyt' value='".$folder . "'>";
$title=$_POST['title'];
$ips=$_SERVER['REMOTE_ADDR'];

$ins="INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`, `picsource`) VALUES ('$title', '$roomname', '$ips', current_timestamp(), '$folder');";
mysqli_query($conn, $ins);
?>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
   var clientmsg=$("#inputf").val();
    $.post("postmsg.php", {file:clientmsg},
   function(data, status) {
    document.getElementsByClassName('anyClass')[0].innerHTML= data;});
    var inval=$("#inputf").val();
    var room='<?php echo $roomname;?>'
    if (clientmsg.length>5) {
       window.location="http://localhost/mychat/rooms.php?roomname="+room+"";
    }
  });

</script>
<?php
?>
    <script type="text/javascript">
        function myFunction() {
  /* Get the text field */
  // document.getElementById("myText").value = "Johnny Bravo";
 var gg=window.location.href;
 document.getElementById("myInput").value = gg;
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied URL: " + copyText.value);

}
    </script>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||--> 

<!-- The text field -->

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript">
    // check for new messages every 1 sec
  setInterval(runFunction, 1000);
  function runFunction()
  {
    $.post("htcont.php", {room: '<?php echo $roomname; ?>'},
      function(data, status)
      {
          document.getElementsByClassName('anyClass')[0].innerHTML = data;
      }
    )
     $(".anyClass").animate({ 
                    scrollTop: $( 
                      ".anyClass").get(0).scrollHeight 
                }, -1);        

  }
	// Get the input field
var input = document.getElementById("usermsg1");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});
	$("#submitmsg").click(function(){
		var clientmsg=$("#usermsg1").val();
    var file2=<?php echo $filename=$_FILES['uploadfile']['name'];?>
  $.post("postmsg.php", {text: clientmsg, room:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
   function(data, status) {
   	document.getElementsByClassName('anyClass')[0].innerHTML= data;});
  $("#usermsg1").val("");
  return false;
    });
</script>
</body>
</html>
