
<?php 
include("../includes/config.php");
$conn=new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
echo "Database Connection Error".$conn->connect_error;
}else{
    $getuserdetails="select * from users where USER_ID=".$_GET['id'];
    $users=$conn->query($getuserdetails);
    //var_dump($users);
    $user=mysqli_fetch_assoc($users);
   // print_r($user);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Accounting App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="section">
        <div class="row">
        <form action="updateuser.php" method="POST">
            <div class="col">
                <h1 class="title has-text-centered">Accounting App</h1>
                <h1 class="subtitle has-text-centered">Edit User Details</h1>
                
                <div class="form">
                <div class="field">
                    <label for="firstname" class="label" >Firstname</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="firstname" required value="<?php echo $user['FIRSTNAME'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="lastname" class="label" >Last Name</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="lastname" required value="<?php echo $user['LASTNAME'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="username" class="label" >Username</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="username" required value="<?php echo $user['USERNAME'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="password" class="label" >Enter Password</label>
                    <p class="control has-icons-left">
                        <input type="password" class="input has-icons-left" name="password" required value="<?php echo $user['PASSWORD'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div> 
                
                <div class="field">
                    <label for="confirmpwd" class="label" >Re Enter Password</label>
                    <p class="control has-icons-left">
                        <input type="password" class="input has-icons-left" name="confirmpwd" required value="<?php echo $user['PASSWORD'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label" >E-Mail</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="email" value="<?php echo $user['EMAIL'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="phone" class="label" >Phone</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="phone" required value="<?php echo $user['PHONE'];?>">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                    <div class="level-right">
                        <div class="level-item">
                        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="button is-danger">Cancel</a>

                        </div>
                        <div class="level-item">
                        <input type="submit" class="button is-success" value="Update">
                        </div>
                    
                    </div>
            </div>
        </div>
        <input type="hidden" name="USERID" value="<?php echo $user['USER_ID']?>">
        </form>
</div>

</div>



</body>
</html>