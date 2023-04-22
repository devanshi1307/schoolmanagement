<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

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
 
 <body>
 
 
 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">STUDENT MANAGEMENT </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://static.vecteezy.com/system/resources/thumbnails/002/002/403/small/man-with-beard-avatar-character-isolated-icon-free-vector.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
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
                <a href="index.php" class="nav-link">
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
              <i class="fas fa-female"></i>
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
 </body>
</html>