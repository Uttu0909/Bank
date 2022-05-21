<?php
include("config.php");

$result2 = mysqli_query($mysql,"select * from customer order by id");
$result3 = mysqli_query($mysql,"select * from customer order by id");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        form {
  position: relative;
  z-index: 1;
  background-color: #FFFFFF10;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  max-width: 360px;
  margin-top: 176px;
  margin-left: 600px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 #000009, 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
input[type="submit"]{
   width: 150px;
  height: 40px;
  background: #ff7200;
  border: none;
 
  font-size: 15px;
  border-radius: 10px;
  cursor: pointer;
  color: #fff;
  transition: 0.4s ease;
}
input[type="submit"]:hover{
   background: #fff;
  color: #000000;
}
.font{
  font-family: Arial;
  font-size: 20px;
  font-weight: bold;
  
}
    </style>
</head>

<body style="background-image:linear-gradient(rgba(0, 0, 0, 0.30),rgba(0, 0, 0, 0.699)),  url('credit.jpg'); background-repeat:no repeat; background-size:cover; ` ">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">TASK 1</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="features.html">Customer</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <form action="transfer.php" method="post">
<font class="font" size="5" color="white">
Sender:<select name="Custname" id="" class="form-control">
                                   <option>Select Sender</option>
                                    <?php 
                                        
                                       
                                    
                                        while($res2=mysqli_fetch_array($result2)){
                                            ?>
                                            <option value="<?php echo $res2['name']?>"> <?php echo $res2['name']?></option>
                                            
                                            <?php
                                        }
                                        
                                        

            
                                ?>
                                 </select><br>
Reciever:<select name="Recname" id="" class="form-control">
                                   <option>Select Reciever</option>
                                    <?php 
                                        
                                       
                                    
                                        while($res2=mysqli_fetch_array($result3)){
                                            ?>
                                            <option value="<?php echo $res2['name']?>"> <?php echo $res2['name']?></option>
                                            
                                            <?php
                                        }
                                        
                                        

            
                                ?>
                                 </select><br>
Amount:<input type="text" name="amount"><br><br>
<input type="submit" value="send"><br><br>
</font>
</center>
</form>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>