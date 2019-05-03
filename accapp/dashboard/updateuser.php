<?php print_r($_POST);?>
<?php
    echo "Request Received";
    include "../includes/config.php";
    //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
            if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }
            else{
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $username=$_POST['username'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $password=$_POST['password'];
                $id=$_POST['USERID'];
                $updateuser= "UPDATE USERS SET 
                        FIRSTNAME =' $firstname',
                        LASTNAME = '$lastname',
                        USERNAME = '$username',
                        EMAIL = '$email',
                        PHONE = '$phone',
                        PASSWORD =' $password'
                        where USER_ID = $id
                        "
                        ;
                        
                echo  $updateuser;           
                //echo $sql;
                if($conn->query($updateuser)===TRUE){
                    

                   header("Location:users.php");
                
                }
                else{
                echo "Error" .$conn->connect_error;
                }
            }
    

?>
