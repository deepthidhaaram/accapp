<?php include "layout/header.php";?>
<?php

include "../includes/config.php";
//$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    
    $getUsers="select * from users"; 
    $users=$conn->query($getUsers);
    if($users->num_rows>0){
        echo '<table class="table">';
        echo '<thead>
            <tr>
            <th>ID</th>
            <th>Account Name</th>
            <th>Balance</th>
            <th>Phoneno </th>
            </tr>
        </thead><tbody>';
        while($user=mysqli_fetch_assoc($users)){
            echo "<tr>";
            echo "<td>".$user['']."</td>";
            echo "<td>".$user['USERNAME']."</td>";
            echo "<td>".$user['EMAIL']."</td>";
            echo "<td>".$user['PHONE']."</td>";
            echo "</tr>";
        }
        echo "<tbody>
        <tfoot>
            <tr>
            <th>ID</th>
            <th>NAME OF THE USER</th>
            <th>USER NAME</th>
            <th>EMAIL ID</th>
            <th>PHONE </th>
            </tr>
            </tfoot>
        <table>";
    }
    else{
        echo "No Users";
    }
    



}
?>








<?php include "layout/footer.php";?>
