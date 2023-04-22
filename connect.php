<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password =$_POST['password'];
//database connection

$conn = new mysqli('localhost','root','','schoolmanagement');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_errno);
}else{
    $msg =mysqli_query($conn,"INSERT INTO `registered`(`name`, `email`, `number`, `password`) VALUES  ('$name','$email','$number','$password')");
  
    echo "registered successfully";
    
   
    $conn->close();

    
}
?>
