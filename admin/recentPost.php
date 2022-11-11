<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=11;
?>

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
if(isset($_GET['delete_id']))
{
 $query_delete="DELETE FROM media WHERE id='".$_GET['delete_id']."'";
 $p = mysqli_query($con, $query_delete);
 echo "<script>alert('Deleted Successfully');</script>
	<script>window.location.href ='recentPost.php'</script>";
} 


$edit = $_GET['edit'];
 $resultt = mysqli_query($con,"SELECT * FROM media where id='".$edit."'");
 $roww = mysqli_fetch_array($resultt);
$location = mysqli_query($con,"SELECT * FROM media");


if(isset($_POST['add'])){
	
$post_header = $_POST['post_header'];
$Post = $_POST['Post'];
$date = $_POST['date'];

if($_FILES['post_logo']['name']!=''){
    $post_logo = rand().$_FILES['post_logo']['name'];
    }
    else{
      // $post_logo = $edit["post_logo"];
    }
    $tempname = $_FILES['post_logo']['tmp_name'];
    $folder = "../assets/img/logo/".$post_logo;


    if($edit==''){

      move_uploaded_file($tempname, $folder);
  
      $insertdata = mysqli_query($con,"INSERT INTO media(file_name, Post, post_header, post_logo,date)VALUES('$file_name', '$Post', '$post_header', '$post_logo','$date' )");
      
      echo "<script>alert('Posted Successfully');</script>
        <script>window.location.href = 'recentPost.php'</script>";
      }
      else{
      move_uploaded_file($tempname, $folder);

      $insertdata = mysqli_query($con,"UPDATE media SET date='$date',Post='$Post',post_header='$post_header',post_logo='$post_logo' where id=".$edit."");
      echo "<script>alert('Updated Successfully');</script>
        <script>window.location.href = 'RecentPost.php'</script>";
      }
      


}




?>

     
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Recent Post</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-5">
   
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
           
			
			<div class="card-header">
    
             <div class="form-group">
                  <label>Enter Title Poster</label>
  
                 <input type="text" name="post_header" value="<?php echo $roww["post_header"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Story</label>
  
                 <input type="text" name="Post" value="<?php echo $roww["Post"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Date</label>
  
                 <input type="datetime-local" name="date" value="<?php echo $roww["date"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Poster Image</label>
  
                 <input type="file" name="post_logo" value="<?php echo $roww["post_logo"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
               
            </div>
			<button type="submit" name="add" class="btn btn-block btn-primary btn-lg">Add</button>
			
          </div>
         
		   </form>
     
        </div>
      
		<div class="col-md-7"  >
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            <div class="card-header">
             <div class="form-group">
                  <label>RecentPost View</label>
                 
                </div>
            </div>
			
			<div class="card-header">
             <table class="table">
                <thead>
                  <tr>
                  <th>poster</th>
                    <th>PostName</th>
                    <th>Story</th>
                 
                  </tr>
                </thead>
                <tbody>
                
		<?php  
		while ($location_ft = mysqli_fetch_array($location)) { 
		?>
				  <tr>
          <td> <img style="width:150px;"src="../assets/img/logo/<?php echo $location_ft["post_logo"] ?>"/></td>
         
          <td ><?php echo $location_ft["Post"]; ?></td>
          
                    <td><?php echo $location_ft["post_header"]; ?></td>

                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
						<a href="recentPost.php?edit=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')"class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="recentPost.php?delete_id=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                </tr>
		<?php
		}
		?>
				</tbody>
              </table>
            </div>
			
          </div>
		   </form>
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
