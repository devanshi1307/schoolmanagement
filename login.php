<?php
include('config.php');
if(@$_SESSION['userId'])
$emailErr = $password=$err="";
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password=$_POST['password'];
  if(empty($email)){
  $emailErr="You must enter an email";}
  if(empty($password)){
  $passwordErr="You must enter an password";
  }
  if(empty($passwordErr) && empty($emailErr)){
  $sql= "SELECT * FROM admin where email='".$email."' and password='".$password."' ";
  $rs=mysqli_query($conn, $sql);
  $rowcount=mysqli_num_rows($rs);
  if($rowcount){
  $row=mysqli_fetch_assoc($rs);
  $_SESSION['userId']=$row['id'];
  $_SESSION['userName']=$row['name'];
  $_SESSION['userEmail']=$row['email'];
  $_SESSION['usertype ']= $row['usertype'];
  header('location:index.php');}
  else{
      $err="Email and password are invalid";
    }
  }
}


          


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login and Register</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="login"  style=" margin-left: 40%; margin-top: 19%;">
        <h1>LOGIN</h1>
        <form action='' method="POST" style="width: 310px;">
        
            
          
            <input type="email" name="email" class="form-control" <?php  if(!empty($emailErr)) echo "is-invalid"; ?>>
            <input type="password" name="password" class="form-control" <?php  if(!empty($passwordErr)) echo "is-invalid"; ?>>
            <input type="submit" name="submit" value="submit">
            

        </form>
        <p>dont have an account ? <a href="registerr.php">Sign up Here</p>

    </div>
</body>
</html>
 









