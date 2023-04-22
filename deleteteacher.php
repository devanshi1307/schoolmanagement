<?php
include('config.php');
if(isset($_GET['deleteid'])){
  $tid=$_GET['deleteid'];

  $sql="delete from teacher where tid='$tid'";

  $result=mysqli_query($conn, $sql);
  if($result){
    header('location:teacher.php');
  }else{
    die(mysqli_error($conn));
  }
}

?>

<?php

if(isset($_GET['deleteid'])){
  $sid=$_GET['deleteid'];

  $sql="delete from student where sid='$sid'";

  $result=mysqli_query($conn, $sql);
  if($result){
    header('location:student.php');
  }else{
    die(mysqli_error($conn));
  }
}

?>

