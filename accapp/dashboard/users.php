<?php include "layout/header.php";?>
<?php
    include "../library/user.php";
    $users=getallusers();
  
    if($users->num_rows>0){
        echo '<table class="table">';
        echo '<thead>
            <tr>
            <th>Account ID</th>
            <th></th>
            <th>USER NAME</th>
            <th>EMAIL ID</th>
            <th>PHONE </th>
            <th>Actions </th>
            
            </tr>
        </thead><tbody>';
        while($user=mysqli_fetch_assoc($users)){
            echo "<tr>";
            echo "<td>".$user['USER_ID']."</td>";
            echo "<td>".$user['FIRSTNAME']." ".$user['LASTNAME']."</td>";
            echo "<td>".$user['USERNAME']."</td>";
            echo "<td>".$user['EMAIL']."</td>";
            echo "<td>".$user['PHONE']."</td>";
            echo '<td>
                <a href="editdetails.php?id='.$user['USER_ID'].'" class="button is-info">Edit</a>
                <a href="deleteuser.php?id='.$user['USER_ID'].'" class="button is-danger">Delete</a></td>';
            
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
    




?>








<?php include "layout/footer.php";?>
