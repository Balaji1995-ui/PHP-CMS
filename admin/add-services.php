<?php

error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=3;
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
 
 date_default_timezone_set('Asia/Kolkata');
$today = date("D d M Y");
$edit = $_GET['edit'];
 $resultt = mysqli_query($con,"SELECT * FROM  services  where id='".$edit."'");
 $roww = mysqli_fetch_array($resultt);
// $edit = $_GET['edit'];
// $resultt = mysqli_query($con,"SELECT * FROM services where id=".$edit."");
//  $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
$title1 = $_POST['title'];
$title2 = str_replace("'","\'", $title1);
$title = str_replace("&","\and", $title2);

$category = $_POST['category'];
$short1 = $_POST['short'];
$short = str_replace("'","\'", $short1);
$descrip1 = $_POST['descrip'];
$descrip = str_replace("'","\'", $descrip1);
$minimum = $_POST['mini_Guest'];
$maximum = $_POST['max_Guest'];
$date = $_POST['Create_date'];
$Venue = $_POST['Venue'];
if($_FILES['img']['name']!=''){
    $img = rand().$_FILES['img']['name'];
    }
    else{
      // $post_logo = $edit["post_logo"];
    }
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../assets/img/logo/".$img;

if($edit==''){

move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"INSERT INTO services(Venue,title,category,descrip,img,date,short,status,max_Guest,mini_Guest,Create_time)VALUES('$Venue','$category','$title','$short','$descrip','$img','$today','0','$maximum','$minimum','$date')");
echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'add-services.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE services SET mini_Guest='$minimum',max_Guest='$maximum',Create_time='$date', category='$category',Venue='$Venue', title='$title',short='$short',descrip='$descrip',img='$img',date='$today' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'add-services.php'</script>";
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
            <h1>EVENT REG</h1>
          </div>
           <div class="col-sm-6">
          <a href="view-services.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View Events</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            
			 
			<div class="card-header">
             <div class="form-group">
                  <label>Enter Title</label>
                 <input name="title" value="<?php echo $roww["title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            
            <div class="card-header">
             <div class="form-group">
                  <label>Select Category</label>
                  <select name="category" class="form-control">
                      <option>Select...</option>
                      <?php 
                      $location = mysqli_query($con,"SELECT * FROM EventCategory"); 
                      while ($location_ft = mysqli_fetch_array($location)) {   
                      ?>
                      <option <?php if($roww["category"]==$location_ft["Event_name"]){ echo 'selected'; } ?> value="<?php echo $location_ft["Event_name"]; ?>"><?php echo $location_ft["Event_name"]; ?></option>
                      <?php
                		}
                	   ?>
                  </select>
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Venue</label>
                 <input name="Venue" value="<?php echo $roww["Venue"]; ?>" type="text" class="form-control" placeholder="Enter Venue Details">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Minimum Guest</label>
                 <input name="mini_Guest" value="<?php echo $roww["mini_Guest"]; ?>" type="text" class="form-control" placeholder="Enter Minimum Guest">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Maximum Guest</label>
                 <input name="max_Guest" value="<?php echo $roww["max_Guest"]; ?>" type="text" class="form-control" placeholder="Enter Maximum Guest">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Date</label>
                 <input name="Create_date" value="<?php echo $roww["Create_date"]; ?>" type="date" class="form-control" placeholder="Enter Maximum Guest">
                </div>
            </div>
            <!-- <div class="card-body pad">
			<label>Short Description</label>
              <div class="mb-3">
                <textarea name="short" placeholder="Short Description" style="width: 100%;" rows="5" cols="23"><?php echo $roww["short"]; ?></textarea>
              </div>
            </div> -->
            	
			<div class="card-body pad">
			<label>Full Description</label>
              <div class="mb-3">
                <textarea name="descrip" class="textarea" placeholder="Place some text here"
               type="text"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
              </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                    <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 800px x 500px</p>
                        <input name="img" type="file" required>
                     <?php echo $roww["img"]; ?>
                  </div>
			</div>
			 
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<button type="submit" name="publise" class="btn btn-block btn-warning btn-lg">Post</button>
                      </div>
                    </div>
                  </div>
                </div>
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
