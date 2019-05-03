<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaction Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Transaction Form
      </h1>
      <form action="transaction.php" method="post">
        <div class="field">
           <label class="label">Transaction Id</label>
           <div class="control">
              <input class="input" type="tel" placeholder="Enter Transaction Id">
           </div>
        </div>
        <div class="field">
          <label class="label">Account Id</label>
          <div class="control">
             <input class="input" type="tel" placeholder="Enter Account Id">
          </div>
       </div>
       <div class="field">
       <label class="label">Transaction Amount</label>
          <!-- <p class="control ">
              <span class="select">
              <i class="fas fa-rupee-sign"></i>
               </span>
           </p> -->
           <div class="control has-icons-left">
              <input class="input" type="tel"  placeholder="Transction Amount">

               <span class="icon is-small is-left">
              <i class="fas fa-rupee-sign"></i>
               </span>
               </div>
          
       </div>
       <div class="field">
           <label class="label">Receiver Id</label>
           <div class="control">
              <input class="input" type="tel" placeholder="Enter Receiver Id">
           </div>
        </div>
        <div class="field">
           <label class="label">Sender Id</label>
           <div class="control">
              <input class="input" type="tel" placeholder="Enter Sender Id">
           </div>
        </div>
        <div class="field">
           <label class="label">Category Id</label>
           <div class="control">
              <input class="input" type="tel" placeholder="Enter Category Id">
           </div>
        </div>
        <div class="field">
           <label class="label">Party Id</label>
           <div class="control">
              <input class="input" type="tel" placeholder="Enter Party Id">
           </div>
        </div>
        <div class="level-right">
            <div class="level-item">
               <input type="reset" class="button is-success" value="Clear">
            </div>
            <div class="level-item">
               <input type="submit" class="button is-success" value="Submit">
            </div>
       </div>
       








      </form>
    </div>
  </section>
  </body>
</html>