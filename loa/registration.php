<?php
print_r($_POST);
include "includes/config.php";
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $accname=$_POST['accname'];
    $balance=$_POST['balance'];
    $mobile=$_POST['mobile'];
    $accategories=$_POST['accategories'];
    $sql= "INSERT INTO list_of_accounts(`ACC_NAME`,`PHONE`,`BALANCE`,`CATEGORY_ID`) 
    VALUES('".$accname."','".$mobile."','".$balance."','" .$accategories."')";
    echo $sql;
    if($conn->query($sql)===TRUE){
        
        header("Location:accountlist.php?accountcreated=1");
    
    }
    else{
        echo "Error" .$conn->connect_error;
    }
}
?>