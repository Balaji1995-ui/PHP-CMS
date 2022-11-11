<?php
include 'conn.php';
include 'auth.php';

$a=1;

// $sql = ("SELECT COUNT(*) FROM users");
// $result = mysql_fetch_array($sql);
// $settings= mysqli_query($con,"SELECT COUNT(*) as bookcode
// FROM users");
// $setting =mysqli_fetch_array($settings);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include "title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
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
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
   <?php include "topbar.php"; ?>
   
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="add-blog.php" class="small-box-footer">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> Add Blog</h3>

                <p>Add</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="view-blog.php" class="small-box-footer">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>View Blog</h3>

                <p>View</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
             </div>
			</a>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="settings.php" class="small-box-footer">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Terminal</h3>

                <p>View</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="add-category.php" class="small-box-footer">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Category</h3>

                <p>Add</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="add-testimonials.php" class="small-box-footer">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>ADD Terminals</h3>

                <p>Add</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="Managebook.php" class="small-box-footer">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Booking</h3>
                <span class="info-box-number"><?php
                                                      echo $comp = $con->query("SELECT COUNT(*) as bookcode
                                                      FROM users")->num_rows;
                                                    ?></span>
                                                    
                <p>View</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="userReport.php" class="small-box-footer">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Users</h3>
                <span class="info-box-number">
                                                    
                <p>View</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             </div>
			</a>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include "footer.php"; ?>

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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
