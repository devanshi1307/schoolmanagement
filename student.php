<?php 
include('config.php');
include('sidebar.php');
include('navbar.php');

?>
<?php
$sid =$fname =$lname = $classroom = $dob = $gender = $address = $filename=" ";
if(isset($_GET['update'])){
$update = "SELECT * FROM student WHERE sid='".$_GET['update']."'";
$result = $conn->query($update);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$sid = $row['sid'];
$fname = $row['fname'];
$lname = $row['lname'];
$classroom = $row['classroom'];
$email = $row['email'];
$dob = date_format(new DateTime($row['bday']),'m/d/Y');
//echo $dob;
$gender = $row['gender'];
$address = $row['address'];
$filename = $row['stud_image'];
}}}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student</title><link rel="icon" href="../img/favicon2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="style.css">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       STUDENT DETAILS
      </h1>
    </section>
   <!-- Main content --> 
   <section class="content">
   <div class="row">
   <?php if (!isset($_GET['update'])) { ?>
   <div class="col-xs-4" style=" width: 25%;">
   <div class="alert alert-success alert-dismissible" style="display: none;" id="truemsg">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   <h4><i class="icon fa fa-check"></i> Success!</h4>
    New Student Successfully added
   </div>
<!-- general form elements -->
    <div class="box box-primary">
     <div class="box-header with-border">
       <h3 class="box-title">NEW STUDENT</h3>
     </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" enctype="multipart/form-data">
      <div class="box-body" >
      <div class="form-group">
      <label for="exampleInputPassword1">Student ID</label>
      <input name="sid" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Student ID No">
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">First Name</label>
      <input name="fname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Student First Name" required>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input name="lname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Student Last Name" required>
      </div>
      <div class="form-group">
      <label>Date of Birth</label>
      <div class="input-group date">
      <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
      </div>
      <input type="text" name='dob' class="form-control pull-right" id="datepicker" placeholder="Select Student's Data of Birth">
      </div>
      <!-- /.input group -->
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Gender</label>
      <div class="radio ">
      <label style="width: 100px"><input type="radio" name="gender" value="Male" checked>Male</label>
      <label style="width: 100px"><input type="radio" name="gender" value="Female" checked>Female</label>
      </div>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Student email" required>
      </div>
      <div class="form-group">
      <label for="exampleFormControlTextarea1">Address</label>
      <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Enter Address"></textarea>
      </div>
      <div class="form-group">
      <label>Class Room</label>
      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="classroom"><option >Select Class Room</option>
      <?php
        $sql = "SELECT * FROM classroom";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<option value='".$row["hno"]."' >".$row["title"]."_ID:".$row["hno"]."</option>";
         } }
         ?>
      </select>
      </div>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Student Image</label>
      <input type="file" name="stud_image" class="form-control" id="stud_image" onchange="getImagePreview(event)">
      
      <div id="preview"></div>
      <script>
        function getImagePreview(event)
        {
         var image=URL.createObjectURL(event.target.files[0]);
         var imagediv= document.getElementById('preview');
         var newimg=document.createElement('img');
         imagediv.innerHTML='';
         newimg.src=image;
         newimg.width="300";
         imagediv.appendChild(newimg);
        }

      </script>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Add Student</button>
      </div>

      </form>
      <?php
        if (isset($_POST['submit'])) {
        
        $sid = $_POST['sid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $classroom = $_POST['classroom'];
        $dob = date_format(new DateTime($_POST['dob']),'Y-m-d');
        //echo $dob;
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $filename = $_FILES["stud_image"]["name"];
        $tempname = $_FILES["stud_image"]["tmp_name"];
        $folder = "./upload/" . $filename;
        //echo $filename;
        if( $_FILES["stud_image"]["name"] != '')
    
        {
         
         move_uploaded_file($tempname,$folder );
   
         
           }
           


      try {
        $sql = "INSERT INTO student (sid,fname,lname,bday,address,gender,classroom,email,stud_image) VALUES ('".$sid."', '".$fname."', '".$lname."','".$dob."','".$address."','".$gender."','".$classroom."','".$email."','".$filename."')";
        if ($conn->query($sql) === TRUE) {
          echo "<script type='text/javascript'> var x = document.getElementById('truemsg');x.style.display='block';</script>";}
        else {}
      } catch (Exception $e) {}}

     if($sql){
      $_SESSION['status'] = "Image stored successfully";
      }
      else{
        $_SESSION['status'] = "Image not inserted";
       
      }
      ?>
 


      </div></div> <?php }elseif (isset($_GET['update'])) { ?>



<!--Update************************************************************************************************************* -->            
      <div class="col-xs-4">
      <div class="alert alert-success alert-dismissible" style="display: none;" id="truemsg">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      Update Student Successfully 
      </div>
<!-- general form elements -->
      <div class="box box-primary">
      <div class="box-header with-border">
      <h3 class="box-title">Update Student</h3>
      </div>

      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" enctype="multipart/form-data" > 
      <div class="box-body">
      <div class="form-group">
      <label for="exampleInputPassword1">Student ID</label>
      <input name="sid" type="text" class="form-control" id="exampleInputPassword1"  required value=<?php echo "'".$sid."'"; ?>>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">First Name</label>
      <input name="fname" type="text" class="form-control" id="exampleInputPassword1" required value=<?php echo "'".$fname."'"; ?>>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Last Name</label>
      <input name="lname" type="text" class="form-control" id="exampleInputPassword1"  required value=<?php echo "'".$lname."'"; ?>>
      </div>
      <div class="form-group">
      <label>Date of Birth</label>
      <div class="input-group date">
      <div class="input-group-addon">
      <i class="fa fa-calendar"></i>
      </div>
      <input type="text" name='dob' class="form-control pull-right" id="datepicker" placeholder="Select Student's Data of Birth" value=<?php echo "'".$dob."'"; ?>>
      </div>
      <!-- /.input group -->
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Gender</label>
      <div class="radio ">
      <label style="width: 100px"><input type="radio" name="gender" value="Male"  <?php if($gender=='Male'){echo 'checked';} ?>>Male</label>
      <label style="width: 100px"><input type="radio" name="gender" value="Female" <?php if($gender=='Female'){echo 'checked';} ?>>Female</label>
      </div>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputPassword1"  required value=<?php echo "'".$email."'"; ?>>
      </div>
      <div class="form-group">
      <label for="exampleFormControlTextarea1">Address</label>
      <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2"><?php echo $address; ?></textarea>
      </div>
      <div class="form-group">
      <label>Class Room</label>
      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="classroom"><option >Select Class Room</option>
      
      <?php
        $sql = "SELECT * FROM classroom";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)  {     
        // output data of each row 
        while($row = $result->fetch_assoc())  {
        echo "<option "; if($classroom==$row["hno"]){echo 'selected="selected"';} echo " value='".$row["hno"]."' >".$row["title"]."_ID:".$row["hno"]."</option>";}}
        ?>
      </select>
      </div>
      </div>
     
      <div class="form-group">
      <label for="exampleInputPassword1">Update Image</label>
     
     
      <img src="./upload/<?php echo $filename; ?>" height="120" width="150" />
      <input type="hidden" name="stud_image" value="<?php echo $fetch['stud_image']?>"/>
      <input type="file" class="form-control" name="stud_image" value="<?php echo $fetch['stud_image']?>" />

      <?php

   // if(ISSET($_POST['submit'])){
		
		//$filename = $_FILES['stud_image']['name'];
	//	$image_temp = $_FILES['stud_image']['tmp_name'];
		//$previous = $_POST['previous']; 
		//$path = "upload/".$filename;
	//	$allowed_ext = array("gif", "jpg", "jpeg", "png");
	  //  if(unlink($path, $previous)){
		//		if(move_uploaded_file($image_temp, $path)){
          
			//		mysqli_query($conn, "UPDATE `student` set  `stud_image` = '$path' WHERE `sid` = '$sid'") ;
		//		}
		//	}		
	//	}else{
	//		//echo "<script>alert('Image only')</script>";
	//	}
	    ?>
      </div> 
      <!-- /.box-body -->
      <div class="box-footer">
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Update Student</button>
      </div>
      </form>

      <?php
      if (isset($_POST['submit'])) {
        $sid = $_POST['sid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $classroom = $_POST['classroom'];
        $email = $_POST['email'];
        $dob = date_format(new DateTime($_POST['dob']),'Y-m-d');
        echo $dob;
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        //$filename= $_FILES['stud_image']['name'];
       // $folder = "upload/" . $filename;


      


      try {
        $sql = "UPDATE student set fname='".$fname."',lname='".$lname."',bday='".$dob."',address='".$address."',gender='".$gender."',classroom='".$classroom."',email='".$email."',stud_image='".$filename."' where sid='".$sid."'";
        $sql = "INSERT INTO student (sid,fname,lname,bday,address,gender,classroom,stud_image) VALUES ('".$sid."', '".$fname."', '".$lname."','".$dob."','".$address."','".$gender."','".$classroom."', '".$filename."')";
       if ($conn->query($sql) === TRUE) {
         echo "<script type='text/javascript'> var x = document.getElementById('truemsg');x.style.display='block';</script>";} 
        else {}} 
      
    
     catch (Exception $e) {}}
     ?></div></div>
      <?php } ?>         
      <div class="col-xs-8">
      <div class="box box-primary">
      <div class="box-header with-border">
      <h3 class="box-title">ALL STUDENTS</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>ID</th>
        <th>FullName</th>
        <th>DateOfBirth</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Classroom</th>
        <th>Email</th>
        <th>Action</th>
        <th>Action</th>
        <th>Image</th>
      </tr>
      </thead>
      <tbody>
      <?php

       $sql = "SELECT * FROM student";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td> " . $row["sid"]. " </td>
        <td> " . $row["fname"]." ". $row["lname"]. " </td>
        <td> " . $row["bday"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["address"]. "</td>   
        <td>" . $row["classroom"]. "</td>
        <td>" . $row["email"]. "</td>
        <td><button class='btn btn-primary'><a href='student.php?update=". $row["sid"]."'><small class='text-light'>Update</small></a></button></td>
        <td><button class='btn btn-danger'><a href='deleteteacher.php?deleteid=".$row["sid"]."'><small class='text-light'>delete</small></a></button></td>
     
        <td><img src=". $row['stud_image']." 'height:40px, width=40px'></td>

        </tr>";}}
       ?>
      </tbody>
      </table>
      </div>
      <!-- /.box-body -->
      </div>
      </div>
      <!-- /.box -->
      </div>
      </section>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Main Footer -->
      <?php include_once 'footer.php'; ?>
      <div class="control-sidebar-bg"></div>
      </div>

      <!-- jQuery 3 -->
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
      <!-- Select2 -->
      <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


      <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <!-- bootstrap color picker -->
      <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
      <!-- bootstrap time picker -->
      <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>

      <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <!-- iCheck 1.0.1 -->
      <script src="plugins/iCheck/icheck.min.js"></script>
      <!-- FastClick -->
      <script src="bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <!-- Page script -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script>
      $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
       })})
      </script>
      <script>   $('.select2').select2()
      $('#datepicker').datepicker({
      autoclose: true
      });
      var r = document.getElementById("student"); 
      r.className += "active"; 
      </script>
</body>
</html>
