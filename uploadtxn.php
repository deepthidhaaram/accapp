<?php 
print_r($_POST);
$temp_filename =$_FILES["att_file"]['tmp_name'];
echo "<br>".$temp_filename."<br>";
var_dump($_FILES);
$dir="../assets/attachments/";
$newname=$dir.$_FILES["att_file"]["name"];
move_uploaded_file($temp_filename,$newname);

?>