<?php
include 'conn.php';
include 'auth.php';
error_reporting(0);
$a=14;
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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
   <?php include "topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "sidebar.php"; ?>

<?php





// $_GET['delete_id'];
if(isset($_GET['delete_id']))
{
 $query_delete="DELETE FROM users WHERE id='".$_GET['delete_id']."'";
 $p = mysqli_query($con, $query_delete);
 echo "<script>alert('Deleted Successfully');</script>
	<script>window.location.href = 'Managebook.php'</script>";
}
// else{

//     $query_update="update users set status="$status" id='".$_GET['id']."'";
//     $p = mysqli_query($con, $query_update);
//     echo "<script>alert('updated Successfully');</script>"
// }


$limit = 10;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$serial = ($page-1) * $limit; 

  
    $resultt = mysqli_query($con,"SELECT * FROM users where bookcode is not null  ORDER BY id DESC LIMIT $serial, $limit");


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Booking</h1>
          </div>
          <!-- <div class="col-sm-6" style="text-align:right;">
            <a class="btn btn-primary" href="add-services.php">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
          </div> -->

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header ">
              <h3 class="card-title">Book Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0 ">
              <table class="table ">
                <thead class="w-75">
                  <tr>
                    <th>Id</th>
                    <th>Booking ID</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>Category</th>
                    <th >Tickets</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php  
			while ($roww = mysqli_fetch_array($resultt)) { 	
			?> 
				  <tr >
					<!-- <td><img style="width:100px;" src="../assets/img/logo/<?php echo $roww["img"]; ?>"></td> -->
                    <td><?php echo $roww["id"]; ?></td>
                    <td><?php echo $roww["bookcode"]; ?></td>
                    <td><?php echo $roww["name"]; ?></td>
                    <td><?php echo $roww["phone"]; ?></td>
                    <td ><?php echo $roww["Even_Category"]; ?></td>
                    <td ><?php echo $roww["Event_Book_ticket"]; ?></td>
                    <td ><?php echo $roww["BOOK_date"]; ?></td>
                    <td ><?php echo $roww["Venue"]; ?></td>
                    <td  class="bg-warning"><?php echo $roww["status"]; ?></td>
					<!-- <td ><?php $dec = $roww['Venue'];
								$removetag = strip_tags($dec);
								$trim = $string = substr($removetag,0,600);
								echo $trim ; ?>..</td> -->
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
						<a  data-toggle="modal" data-target="#myModal" href="Managebook.php?edit=<?php echo $roww["id"]; ?>" onclick="return confirm('Are you sure?')"  class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="Managebook.php?delete_id=<?php echo $roww["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                </tr>
			<?php 
			$serial++;
			} 
			?>
				</tbody>
              </table>
            </div>

            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">

      <form method="post" action="status.php">
        
        <div class="card-header">
             <div class="form-group">
           
                 
                <input class="form-control" name="name"  type="text" class="form-control" placeholder="customer Name">
                   
      </input>
                </div>
                <div class="form-group">
           
                 
           <input class="form-control" name="status"  type="text" class="form-control" placeholder="Status">
              
 </input>
           </div>
              
                 <input type="submit"  name="submit" class="btn-success"></input>
<!-- <a  href="Signup.php" type="button" class="btn-danger">Sign Up</a> -->
            </div>
</form>

        </div>
        <div class="modal-footer">
          <button type="button  text-dark" class="bg-warning" data-dismiss="modal">Close</button>
        </div>
      </div>






			 <?php  
                          
		// 	$result_db = mysqli_query($con,"SELECT COUNT(id) FROM services");
		
		// $row_db = mysqli_fetch_row($result_db);  
		// $total_records = $row_db[0];  
		// $total_pages = ceil($total_records / $limit); 
		// /* echo  $total_pages; */
		// $pagLink = "<ul class='pagination'>";  
		// for ($i=1; $i<=$total_pages; $i++) {
		// 			  $pagLink .= "<li class='page-item'><a class='page-link' href='view-services.php?page=".$i."'>".$i."</a></li>";	
		// }
		// echo $pagLink . "</ul>";  
		// ?>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
