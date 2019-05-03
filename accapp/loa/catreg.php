<?php
print_r($_POST);
include "includes/config.php";
$conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{

    $catname=$_POST['catname'];
    $desc=$_POST['despcription'];
    $sql= "INSERT INTO category(`CAT_NAME`,`DESCRIPTION`) VALUES('".$catname."','".$desc."')";
    echo $sql;
    if($conn->query($sql)===TRUE){
        
       header("Location:cattable.php?accountcreated=1");
    
    }
    else{
        echo "Error" .$conn->connect_error;
    }
}
?>