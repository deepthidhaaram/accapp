<?php
    echo "Request Received";
    include "includes/config.php";
    //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
            if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }
            else{
                $catname=$_POST['catname'];
                $description=$_POST['description'];
                $id=$_POST['CATID'];
                $updatecategory= "UPDATE category SET 
                        CAT_NAME ='$catname',
                        DESCRIPTION = '$description'
                        where CAT_ID = $id
                        "
                        ;
                        
                echo  $updatecategory;           
                //echo $sql;
                if($conn->query($updatecategory)===TRUE){
                    
                   header("Location:cattable.php");
                
                
            }
                else{
                echo "Error" .$conn->connect_error;
                }
            }
    
?>
