<?php
print_r($_POST);
include "includes/config.php";
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $TransactionId=$_POST['TransactionId'];
    $AccountId=$_POST['AccountId'];
    $TransactionAmount=$_POST['TransctionAmount'];
    $ReceiverId=$_POST['ReceiverId'];
    $SenderId=$_POST['SenderId'];
    $CategoryId=$_POST['CategoryId'];
    $PartyId=$_POST['PartyId'];
    $sql= "INSERT INTO USERS('transaction_id','account_id','transaction_amount','receiver_id','sender_id','categoty_id','party_id') VALUES( '".$TraansactionId."','".$AccountId."','".$TransactionAmount."','".$ReceiverId."','".$SenderId."','".$CategoryId."','".$PartyId."');";
    echo $sql;
    if($conn->query($sql)===TRUE){
        echo "Successfully registered";
    }
    else{
        echo "Error";
    }
}
?>