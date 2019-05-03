<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Transaction</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form action="uploadtxn.php" method="POST" enctype="multipart/form-data">
    <div class="field">
        <label for="txn_amt" class="label" >Enter Transaction Ammount</label>
            <p class="control has-icons-left">
                <input type="text" class="input has-icons-left" name="txn_amt" required>
                <span class="icon is-small is-left"><i class="fas fa-rupee-sign"></i></span>
             </p>
    </div>
    <div class="field">
        <label for="txn_date" class="label" >Enter Transaction Date</label>
            <p class="control has-icons-left">
                <input type="date" class="input has-icons-left" name="txn_date" required>
                <span class="icon is-small is-left"><i class="fas fa-calendar-alt"></i></span>
             </p>
    </div>
    <div class="field">
        <label for="att_file" class="label" >Upload A Receipt / Invoice</label>
            <p class="control has-icons-left">
                <input type="file" class="input has-icons-left" name="att_file" id="att_file" required>
                <span class="icon is-small is-left"><i class="fas fa-file-alt"></i></span>
             </p>
    </div>

    <p class="has-text-right">
    <input type="submit" value="Add transaction" name="submit" class="button is-success">
    </p>
    
    </form>

    
    </div>
    </body>
</html>