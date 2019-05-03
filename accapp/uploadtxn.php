<?php

function uploadFile(){ 
$target_dir = "attachments/";
$target_file = $target_dir .date("dmyihsu").".".pathinfo($_FILES["att_file"]["name"],PATHINFO_EXTENSION);
$uploadOk = 1;
$attachmentType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["att_file"]["tmp_name"]);
// Check if file already exists
if (file_exists($target_file)) {
    return "DUPLICATE FILE";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["att_file"]["size"] > 204800000) {
    return "SIZE EXCEEDED";
    $uploadOk = 0;
}
// Allow certain file formats
if($attachmentType != "jpg" && $attachmentType != "png" && $attachmentType != "jpeg"
&& $attachmentType != "gif" && $attachmentType != "pdf" && $attachmentType != "odt"  ) {
    return "FILETYPE NOT ALLOWED";
    $uploadOk = 0;
}
if (move_uploaded_file($_FILES["att_file"]["tmp_name"], $target_file)) {
        $att_name=pathinfo($target_file,PATHINFO_BASENAME);
        echo $att_name;
        return ['message'=>"SUCCESS",'filename'=>$att_name];
} else {
        echo "FILESYSTEM ERROR";
}
}



try{
print_r($_POST);
include "includes/config.php";
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $status=uploadFile();
    print_r($status);
    echo "<br>Attachment Name".$status["filename"];
    $insertAtt="INSERT INTO ATTACHMENTS(ATT_NAME) VALUES ('".$status["filename"]."')";
    if($conn->query($insertAtt)===TRUE){
        echo "Attachment Added<br>";
    }
    else{
        echo "Unable to Insert Attachment Filename";
    }
    $txn_amt=$_POST['txn_amt'];
    $txn_date=$_POST['txn_date'];
    $att_id=$conn->insert_id;
    $att_id=0;
    $insertTxn="INSERT INTO TRANSACTIONS(TXN_AMT,TXN_DATE,ATTACHMENT_ID) VALUES (".$txn_amt.",'".$txn_date."',".$att_id.."','".$att_id."')";
    echo $insertTxn;
    if($conn->query($insertTxn)===TRUE){
        echo  "Added transaction Successfully!";
    }
    else{
        echo "Error" .$conn->connect_error;
    }
}




   
    if($status["message"]=="SUCCESS"){
        echo "Uploaded the file Successfully";
    }
    else{
        echo "Unable to Upload the File";
        echo $status;
    }

}
catch(Exception $e){
    echo $e->message();
}

?>