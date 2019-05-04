<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>dashboard</title>
  </head>
  <body>
        <!-- Image and text -->

             
            <nav class="navbar navbar-dark bg-dark navbar-fixed-top">
                    <a class="navbar-brand" href="../profileupdate.php">
                      <button><i class="fas fa-user"></i></button>
                    </a>
                    <h5 style="color:gray">Personal Account App</h5>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">accapp</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>              
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Add Account</a></li>
                    <li><a href="#">Transaction</a></li>
                    <li><a href="#">Incomes</a></li>
                    <li><a href="#">Expences</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">change password</a></li>
                    <li><a href="#">Log Out</a></li>
                  </ul>
                </div>
           </nav>
              <div class="container-fleid ">
              <div class="row">
              <!-- side menu -->
                <div class="col-sm-2" style="background-color:#e1e1e1">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" href="#"><h4>Add Account</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>Transactions</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>Incomes</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>Expences</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>History</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>change password</h4></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><h4>Log Out</h4></a>
                        </li>
                    </ul>
                </div>

              <!-- middle content- transactions-->
                <div class="col-sm-7" style="background-color:#f1f1f1">
                  <h1>Latest Transactions</h1>
                </div>

                <!-- right side content-summery of the transactions-->
                <div class="col-sm-3" style="background-color:#e1e1e1">
                  <h3>Accounts Summary</h3>

                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                      <div class="card-header">Credit Cards</div>
                      <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>

                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                      <div class="card-header">Banking</div>
                      <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                      <div class="card-header">Loans</div>
                      <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                </div>
              </div>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>