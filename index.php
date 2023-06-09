<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
  <li class="nav-item">
  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
  <a href="home.php" class="nav-link" >HOME</a>
  </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
  <!-- Navbar Search -->
  <li class="nav-item">
  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
  <i class="fas fa-search"></i></a>
  <div class="navbar-search-block">
  <form class="form-inline">
  <div class="input-group input-group-sm">
  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
  <button class="btn btn-navbar" type="submit">
  <i class="fas fa-search"></i>
  </button>
  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
  <i class="fas fa-times"></i>
  </button>
  </div>
  </div>
  </form>
  </div>
  </li>
  </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">STUDENT MANAGEMENT</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div></div>
    <div class="image">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/002/002/403/small/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="index.php" class="d-block">ADMIN</a>
    </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="index.php" class="nav-link" ">
    <i class="fa fa-circle-o"></i>
    <p><h5>DASHBOARD</h5></p>
    </a>
    </li>
    </ul>
    </li>
    <li class="nav-item">
    <a href="teacher.php" class="nav-link">
    <i class="fas fa-chalkboard-teacher"></i>
    <p>
    TEACHERS
    <span class="badge badge-info right"></span>
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="student.php" class="nav-link">
    <i class="fa fa-female"></i>
    <p>
    STUDENTS
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="class.php" class="nav-link">
    <i class="fas fa-chalkboard"></i>
    <p>
    CLASSROOM
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="subject.php" class="nav-link">
    <i class="fas fa-book"></i>
    <p>
    SUBJECTS
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="exam.php" class="nav-link">
    <i class="fas fa-user-tie"></i>
    <p>
    EXAM
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="examresult.php" class="nav-link">
    <i class="fas fa-user-tie"></i>
    <p>
    RESULT
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="notice.php" class="nav-link">
    <i class="nav-icon fas fa-edit"></i>
    <p>
    NOTICE
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="logout.php" class="nav-link">
    <i class="fas fa-user-tie"></i>
    <p>
    LOGOUT
    </p>
    </a>
    </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <!-- Menu Footer-->
          <li class="user-footer"></li>
       
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <p>Total Students</p>
                <?php
                $query = "SELECT * FROM student";
             
               $query_run = mysqli_query($conn, $query);
            
               $row = mysqli_num_rows( $query_run);
               echo '<h1>'.$row.'</h1>';

                ?>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="student.php" class="small-box-footer">More Info  <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                
                <p>Total Teachers</p>
                <?php
                $query = "SELECT * FROM teacher";
             
               $query_run = mysqli_query($conn, $query);
               $row = mysqli_num_rows( $query_run);
               echo '<h1>'.$row.'</h1>';
               
                ?>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="teacher.php" class="small-box-footer">More Info     <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
  
              <p>Total Subject</p>
                
                <?php
                $query = "SELECT * FROM subject";
             
               $query_run = mysqli_query($conn, $query);
            
               $row = mysqli_num_rows( $query_run);
               echo '<h1>'.$row.'</h1>';

              ?>

              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="subject.php" class="small-box-footer">More Info     <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
             <p>Total class</p>
          
                <?php
                $query = "SELECT * FROM classroom";
             
               $query_run = mysqli_query($conn, $query);
            
               $row = mysqli_num_rows( $query_run);
               echo '<h1>'.$row.'</h1>';
                
              ?>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="class.php" class="small-box-footer">More Info     <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          </section>
          <section class="col-lg-5 connectedSortable">
          </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->

  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
