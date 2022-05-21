<?php 

$id= $_GET['id'];



include("config.php");
$result = mysqli_query($mysql,"select * from customer where id='$id'");

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
    width: 30%;
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
    background-color: #f2f2f2;
    color: white;
    text-align: center;
  }

  #customers td {
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
    <?php
                                while($res=mysqli_fetch_array($result)){

    

                                    ?> 
  <tr>
    <th colspan="2">
        <img src="https://www.kindpng.com/picc/m/78-785904_block-chamber-of-commerce-avatar-white-avatar-icon.png" alt="" height="250" width="250">
    </th>
    
  </tr>
  <tr>
      <td>ID</td>
      <td><?php echo $res['name']; ?></td>
  </tr>
  <tr>
     <td>Name</td>
     <td><?php echo $res['id']; ?></td>
  </tr>
  <tr>
     <td>Email</td>
     <td><?php echo $res['email']; ?></td>
  </tr>
 <tr>
      <td>Balance</td>
      <td><?php echo $res['balance']; ?></td>
 </tr>
</table>
<?php
                                }
                                ?>
   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>