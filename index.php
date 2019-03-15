<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">   
</head>
<body>
<div class="container">
    <div class="columns is-centered is-mobile">
        <div class="column is-mobile is-half">

            <h1 class="title has-text-centered">Personal Accounting Pro</h1>
            <h3 class="subtitle has-text-centered">Login</h3>
            <form action="index.php" method="POST">
                <div class="field">
                <label for="username" class="label" >Username</label>
                <input type="text" class="input" placeholder="Enter Username" name="username" required>
                </div>
                <div class="field">
                <label class="label" for="password">Password</label>
                <input type="password" class="input" placeholder="Enter Password" name="password" required>
                

                </div>
                <p class="has-text-centered">
                <input type="reset" value="cancel" class="button is-danger">
                <input type="submit" class="button is-success" name="submit" value="Login">
                </p>
            
                <br>
                <br>
                <div class="is-info">
                    <p class="text has-text-centered has-text-danger">
                    <?php
                    if(isset($_POST['submit'])){
                        include "includes/config.php";
                        //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
                        $conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
                        if($conn->connect_error){
                            die("Connection Error".$conn->connect_error);
                        }
                        else{
                            $username=$_POST['username'];
                            $password=$_POST['password'];
                            $sql= "SELECT * FROM USERS WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
                            //echo $sql;
                            $users=$conn->query($sql);
                            if($users->num_rows>0){
                                header("Location:dashboard.php");
                            }
                            else{
                                echo "Please Check your Credentials.!";
                            }
                        }

                }
                    ?>

                    </p>
                
                </div>


                <br>
                <p class="has-text-success">
            
                </p>
                
                <p class="has-text-centered">
                <a href="regform.php" class="button is-info">Dont have an account Please Register Here</a>                
                </p>
                
            </form>

            
                
        </div>
    </div>

</div>
</body>
</html>