<?php
print_r($_POST); 
$servername="localhost";
$user="root";
$pwd="shravani";
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
    $sql= "INSERT INTO lis_of_accounts('account name','Phoneno','balance','account_categories') 
    VALUES
    ('$accountname".."','".$mobile."','".$balance."','".$accategories."');";
    echo $sql;
    if($db->query($sql)===TRUE){
        echo "Successfully registered";
    }
    else{                 
        echo "Error";
    }
}




 ?>