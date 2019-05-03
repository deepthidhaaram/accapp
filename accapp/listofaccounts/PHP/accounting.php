<?php
print_r($_POST); 
$servername="localhost";
$user="root";
$pwd="";
$dbname="accapp";
$db=new mysqli($servername,$user,$password,$dbname);
if($db->connect_error){
    die("Connection Error".$conn->connect_error);
}
//  or 
// die("unable to create");
else{
    $accountname=$_POST['accname'];
    $balance=$_POST['balance'];
    $mobile=$_POST['mobile'];
    $accategories=$_POST['accategories'];
    $sql= "INSERT INTO lis_of_accounts('ACC_NAME','BALANCE','PHONE','CATEGORY_ID') 
    VALUES
    ('$accountname".."','".$balance."','".$mobile."','".$accategories."');";
    echo $sql;
    if($db->query($sql)===TRUE){
        echo "Successfully registered";
    }
    else{                 
        echo "Error";
    }
}




 ?>