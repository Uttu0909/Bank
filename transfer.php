<?php
include("config.php");
$sender = $_POST['Custname'];
$reciever = $_POST['Recname'];
$amount = (int)$_POST['amount'];

$sql = "insert into transaction (sender,reciever,amount) values('$sender','$reciever','$amount')";
$sql2 = "update customer set balance = balance+".$amount." where name= '".$reciever."' ";
$sql3 = "update customer set balance = balance-".$amount." where name= '".$sender."' ";

if(mysqli_query($mysql, $sql) && mysqli_query($mysql, $sql2) && mysqli_query($mysql, $sql3)){
   
    


    header("location:customer.php");
       
    
   

}


    else
        echo "Error .\n".mysqli_error();
 
mysqli_close($mysql);


?>