<?php
print_r($_POST);
include "includes/config.php";
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $firstname=$_POST['username'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql= "INSERT INTO USERS(`FIRSTNAME`,`LASTNAME`,`USERNAME`,`EMAIL`,`PHONE`,`PASSWORD`) VALUES('".$firstname."','".$lastname."','".$username."','".$email."','".$phone."','".$password."')";
    //echo $sql;
    if($conn->query($sql)===TRUE){
        
        header("Location:index.php?accountcreated=1");
    
    }
    else{
        echo "Error" .$conn->connect_error;
    }
}
?>

select * from accapp.users;