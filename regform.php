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
        <form action="register.php" method="POST">
            <div class="col">
                <h1 class="title has-text-centered">Accounting App</h1>
                <div class="form">
                <div class="field">
                    <label for="firstname" class="label" >Firstname</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="firstname" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="lastname" class="label" >Last Name</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="lastname" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="username" class="label" >Username</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="username" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="password" class="label" >Enter Password</label>
                    <p class="control has-icons-left">
                        <input type="password" class="input has-icons-left" name="password" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div> 
                
                <div class="field">
                    <label for="confirmpwd" class="label" >Re Enter Password</label>
                    <p class="control has-icons-left">
                        <input type="password" class="input has-icons-left" name="confirmpwd" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label" >E-Mail</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="email">
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="phone" class="label" >Phone</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="phone" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>
                    <div class="level-right">
                        <div class="level-item">
                        <input type="reset" class="button is-success" value="Clear">
                        </div>
                        <div class="level-item">
                        <input type="submit" class="button is-success" value="Register">
                        </div>
                    
                    </div>
            </div>
        </div>
        </form>
</div>

</div>



</body>
</html>