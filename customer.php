<?php
include("config.php");

$result = mysqli_query($mysql,"select*from customer order by id");

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-top:75px;
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
    <th>Name</th>
    <th>Email</th>
    <th>Balance</th>
    <th>Details</th>
  </tr>
 <tr>
 <?php
              while($res=mysqli_fetch_array($result)){
                  echo '<tr>';
                  echo '<td>'.$res['id'].'</td>';
                  echo '<td>'.$res['name'].'</td>';
                  echo '<td>'.$res['email'].'</td>';
                  echo '<td>'.$res['balance'].'</td>';
                  echo '<td> <button class="btn btn-primary"> <a style="color: black; list-style:none ; text-decoration: none;" href="viewcust.php?id='.$res['id'].'">View Details  </a></button></td>';
                 
                  echo '</tr>';
              }

              ?>
     
          </tr>
</table class="button">
<table>
      <tr>
   <a href="trans_money.php"> <button type="button" class="btn btn-secondary btn-sm" style="margin-left:710px; margin-top:10px; background-color:#f2f2f2; border:#f2f2f2;"><font style="color:#333">Start Transaction</font></button></a>
    </tr>
</table>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>