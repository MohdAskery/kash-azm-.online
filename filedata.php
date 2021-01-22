<?php

$filename=$_FILES['uploadfile']['name'];
$tmp_name=$_FILES['uploadfile']['tmp_name'];
$folder="img/".$filename;
move_uploaded_file($tmp_name,$folder);
echo $folder;
echo "<input type='text' id='inputf' value='".$folder . "'>";
echo "<br>";
?>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
   var clientmsg=$("#inputf").val();
    $.post("postmsg.php", {file:clientmsg},
   function(data, status) {
   	document.getElementsByClassName('anyClass')[0].innerHTML= data;});
  return false;
    });

</script>
<?php
?>