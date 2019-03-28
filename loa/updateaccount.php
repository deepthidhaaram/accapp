<?php
    echo "Request Received";
    include "includes/config.php";
    //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
    if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }
    else{
                $accname=$_POST['accname'];
                $mobile=$_POST['mobile'];
                $balance=$_POST['balance'];
                $accategories=$_POST['accategories'];
                $id=$_POST['ACCID'];
                $updateuser= "UPDATE list_of_accounts SET 
                        ACC_NAME ='$accname',
                        PHONE ='$mobile',
                        BALANCE ='$balance',
                        CATEGORY_ID ='$accategories'
                        where ACC_ID = $id
                        "
                        ;
                        
                echo  $updateuser;           
                //echo $sql;
            if($conn->query($updateuser)===TRUE){
                    
                   header("Location:accountlist.php");
                
                }
            else{
                echo "Error" .$conn->connect_error;
                }
        }
    
?>
