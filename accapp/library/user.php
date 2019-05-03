<?php
include "../includes/config.php";
$conn = mysqli_connect($servername,$dbuser,$dbpwd,$dbname);    
function insertuser($user){
    global $conn;
    $firstname=$user['firstname'];
    $lastname=$user['lastname'];
    $username=$user['username'];
    $password=$user['password'];
    $email=$user['email'];
    $phone=$user['phone']; 
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql= "INSERT INTO USERS(`FIRSTNAME`,`LASTNAME`,`USERNAME`,`EMAIL`,`PHONE`,`PASSWORD`) VALUES('".$firstname."','".$lastname."','".$username."','".$email."','".$phone."','".$password."')";
        if($conn->query($sql)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }

}
function deleteuser($userid){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql="DELETE FROM users where USER_ID=".$userid;
        if($conn->query($sql)===TRUE){

        }
        else{
            return "deleteerror";
        }
    }
}
function updateuser($userid,$user){
    global $conn;
    $firstname=$user['firstname'];
    $lastname=$user['lastname'];
    $username=$user['username'];
    $password=$user['password'];
    $email=$user['email'];
    $phone=$user['phone']; 
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
       
        if($conn->query($sql)==TRUE){
            return 1;
        }
        else{
            return 0;
        }
    }

}
function getuserdetails($id){
    if($conn->connect_error){
        die("Database Connection Error");
    }

}
function getallusers(){
    global $conn;
    if($conn->connect_error){
        die("Database Connection Error");
    }
    else{
        $sql="select * from users";
        $users=$conn->query($sql);
        if($users->num_rows>0){
            return $users;
        }
        else{
            return 0;
        }
    }

}
?>