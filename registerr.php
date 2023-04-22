<?php
include("config.php");
if(isset($_POST['submit']))
 $email = $_POST['email'];
 $password = $_POST['password'];
 $number = $_POST['number'];
 $name = $_POST['name'];
 $sql=mysqli_query($conn, "select id from admin where email='$email' ");
 $row=mysqli_num_rows($sql);
if($row>0){
 echo "already exist";}  
else{$msg=mysqli_query($conn, "insert into admin (email,  password , number, name) values('$email','$password','$number','$name')");
if($msg){ echo "success";} }

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
    <div class="signup" style=" margin-left: 40%;  margin-top: 7%">
        <h1>REGISTER</h1>
        <form method="POST">
            <label> Name</label>
            <input type="text" name="name" required>
            
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Number</label>
            <input type="tel" name="number" required>
            <label>password</label>
            <input type="password" name="password" required>
            <input type="submit" name="submit" value="submit">
        </form>
        <p>Already have an account ? <a href="login.php"> Login Here</p>

    </div>
</body>
</html>

