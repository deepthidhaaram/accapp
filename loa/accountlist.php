 <?php include"includes/header.php"?>
 <!-- sidebar menu -->
<?php include"includes/navigation.php" ?>
<?php
include("includes/config.php");
$conn=new mysqli($servername,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    
    $getlistofaccounts="select * from list_of_accounts"; 
    $list_of_accounts=$conn->query($getlistofaccounts);
    if($list_of_accounts->num_rows>0){
        echo '<table class="table is-mobile">';
        echo '<thead>
            <tr>
            <th>Account ID</th>
            <th>ACCOUNT NAME</th>
            <th>PHONE</th>
            <th>BALANCE</th>
            <th>CATEGORY ID</th>
            <th>Actions </th>
            
            </tr>
        </thead><tbody>';
        while($user=mysqli_fetch_assoc($list_of_accounts)){
            echo "<tr>";
            echo "<td>".$user['ACC_ID']."</td>";
            echo "<td>".$user['ACC_NAME']."</td>";
            echo "<td>".$user['PHONE']."</td>";
            echo "<td>".$user['BALANCE']."</td>";
            echo "<td>".$user['CATEGORY_ID']."</td>";
            echo '<td>
                <a href="editaccount.php?id='.$user['ACC_ID'].'" class="button is-info">Edit</a>
                <a href="delete.php?id='.$user['ACC_ID'].'" class="button is-danger">Delete</a>
                </td>';
            
            echo "</tr>";
        }
        echo "<tbody>
       
        <table>"; 
    }
    else{
        echo "No Users";
    }
}

?>