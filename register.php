<?php
print_r($_POST);
include "includes/config.php";
include "library/user.php";
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $user['firstname']=$_POST['firstname'];
    $user['lastname']=$_POST['lastname'];
    $user['username']=$_POST['username'];
    $user['password']=$_POST['password'];
    $user['email']=$_POST['email'];
    $user['phone']=$_POST['phone'];
    if(insertuser($user)){
        header("location:index.php?acccreated=1");
    }
    else{
        echo "Cannot Register Please retry";
    }
?>