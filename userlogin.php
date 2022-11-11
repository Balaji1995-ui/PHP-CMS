<?php
 include 'admin/conn.php';
$settings= mysqli_query($con,"SELECT*FROM Settings");
$setting =mysqli_fetch_array($settings);

$tops = mysqli_query($con,"SELECT * FROM users");
$top =mysqli_fetch_array($tops);
// $fullname =  getIndividualName($_SESSION['user_id'], $conn);
// if (isset($_GET['error'])) {
//     echo "<script>alert('Payment could not be initialized! Network Error!'); window.location = 'individual.php?page=reg';</script>";
//     exit;
// }

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>User Login | <?php echo $setting['site_name']?></title>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <script src="../js/alpine.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="navbar-nav">
                    <a class="nav-link" href="#"></a>
                    <a class="nav-link" href="#"><?php echo $setting['site_name'] ?></a>
                </li>
            </ul>


            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <!-- Brand Logo -->
            <a href="individual.php" class="brand-link">

                <span class="brand-text font-weight-light"><?php echo date("D d, M y"); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/img/logo/1746023373gallery-1.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                  
                        <a href="#" class="d-block"><?php echo $top['name']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item has-treeview menu-open">
                            <a href="individual.php" class="nav-link <?php echo (@$_GET['page'] == '') ? 'active' : '';?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                </p>
                            </a>

                        </li> -->
                        

                        <li class="nav-item">
                            <a href="userlogin.php?page=reg" class="nav-link <?php echo (@$_GET['page'] == 'reg') ? 'active' : '';?>">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Booking</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                        <a href="userlogin.php?page=paid" class="nav-link <?php echo (@$_GET['page'] == 'paid') ? 'active' : '';?>">
               <i class="fa fa-book nav-icon" ></i>
              <p>
           View Booking
              </p>
            </a>
          </li> 
                        <!-- <li class="nav-item">
                            <a href="individual.php?page=feedback" class="nav-link <?php echo (@$_GET['page'] == 'feedback') ? 'deactive' : '';?>">
                                <i class="fa fa-mail-bulk nav-icon"></i>
                                <p>Feedback</p>
                            </a>
                        </li> -->

                        <li>
                        <li class="nav-item">
                            <a href="schedule.php" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
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
                            <h1 class="m-0 text-dark"></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
   <?php
   


   if (!isset($_GET['page']))
       include 'title.php';
   elseif ($_GET['page'] == 'reg')
       include 'reg.php';
//    elseif ($_GET['page'] == 'pay')
//        include 'make_payment.php';
   elseif ($_GET['page'] == 'paid')
       include 'paid.php';
//    elseif ($_GET['page'] == 'upload')
//        include 'userlogin/upload.php';
//    elseif ($_GET['page'] == 'status')
//        include 'individual/status.php';
   elseif ($_GET['page'] == 'logout') {
    //    @session_destroy();
   }
   ?>
 
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
             
            </div>
            <!-- Default to the left -->
            <strong><?php echo $setting['site_name']?> - All Rights Reserved</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>

    <script>
     $(function () {
    // Summernote
    $('.textarea').summernote()
  })
    </script>
</body>

</html>