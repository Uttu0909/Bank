<?php
include("config.php");

$result = mysqli_query($mysql,"select*from transaction order by id");

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Transaction</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <style>
        
        #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-top:100px;
    margin-left: auto;
    margin-right: auto;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  #customers tr:nth-child(odd){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #f2f2f2 ;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #333;
    color: white;
    text-align: center;
  }


    </style>
</head>

<body style="background-image:linear-gradient(rgba(0, 0, 0, 0.30),rgba(0, 0, 0, 0.699)),  url('credit.jpg'); background-repeat:no repeat; background-size:cover; ` ">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">TASK 1</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="customer.php">Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="transaction.php">Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <table id="customers">
   
  <tr>
    <th>ID</th>
    <th>Sender Name</th>
    <th>Reciever Name</th>
    <th>Amount</th>
    <th>Date and Time</th>
  </tr>
 <tr>
 <?php
              while($res=mysqli_fetch_array($result)){
                  echo '<tr>';
                  echo '<td>'.$res['id'].'</td>';
                  echo '<td>'.$res['sender'].'</td>';
                  echo '<td>'.$res['reciever'].'</td>';
                  echo '<td>'.$res['amount'].'</td>';
                  echo '<td>'.$res['time'].'</td>';
                 
                 
                  echo '</tr>';
              }

              ?>
     
          </tr>
</table class="button">
<table>
   
   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>