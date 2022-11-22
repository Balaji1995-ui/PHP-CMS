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
 $resultt = mysqli_query($con,"SELECT * FROM tbl_plan_detail  where id='".$edit."'");
 $roww = mysqli_fetch_array($resultt);
// $edit = $_GET['edit'];
// $resultt = mysqli_query($con,"SELECT * FROM services where id=".$edit."");
//  $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
$title1 = $_POST['Proj_title'];
$title2 = str_replace("'","\'", $title1);
$title = str_replace("&","\and", $title2);
$Invest_Money =$_POST['Invest_Money'];
$cycle=$_POST['cycle'];
$days_return=$_POST['days_return'];
$total_revenue=$_POST['total_revenue'];
// $create_time=$_POST[];

// $category = $_POST['category'];
// $short1 = $_POST['short'];
// $short = str_replace("'","\'", $short1);
// $descrip1 = $_POST['descrip'];
// $descrip = str_replace("'","\'", $descrip1);
// $minimum = $_POST['mini_Guest'];
// $maximum = $_POST['max_Guest'];
// $date = $_POST['Create_date'];
// $Venue = $_POST['Venue'];
if($_FILES['img']['name']!=''){
    $img = rand().$_FILES['img']['name'];
    }
    else{
      // $post_logo = $edit["post_logo"];
    }
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../img/plan/".$img;

if($edit==''){

move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"INSERT INTO tbl_plan_detail (`Proj_title`,`Invest_Money`, `cycle`, `days_return`, `total_revenue`,`img`)VALUES('$title', '$Invest_Money', '$cycle', '$days_return', '$total_revenue','$img')");
echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'add-services.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE tbl_plan_detail SET Proj_title='$title', Invest_Money='$Invest_Money', cycle='$cycle', days_return='$days_return', total_revenue='$total_revenue',img='$img' where id=".$edit."");
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
            <h1>Plan Register</h1>
          </div>
           <div class="col-sm-6">
          <a href="view-services.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View Plans</a>
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
             <!-- <div class="form-group">
                  <label>Plan Title</label>
                 <input name="Proj_title" value="<?php echo $roww["Proj_title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div> -->
            
            <div class="card-header">
             <div class="form-group">
                  <label>Select Category</label>
                  <select name="Proj_title" class="form-control">
                      <option>Select...</option>
                      <?php 
                      $location = mysqli_query($con,"SELECT * FROM plancategory"); 
                      while ($location_ft = mysqli_fetch_array($location)) {   
                      ?>
                      <option <?php if($roww["Proj_title"]==$location_ft["plan_name"]){ echo 'selected'; } ?> value="<?php echo $location_ft["plan_name"]; ?>"><?php echo $location_ft["plan_name"]; ?></option>
                      <?php
                		}
                	   ?>
                  </select>
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Invest_Money</label>
                 <input name="Invest_Money" value="<?php echo $roww["Invest_Money"]; ?>" type="text" class="form-control" placeholder="Enter Invest_Money">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Cycle</label>
                 <input name="cycle" value="<?php echo $roww["cycle"]; ?>" type="text" class="form-control" placeholder="Enter cycle">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Days_return</label>
                 <input name="days_return" value="<?php echo $roww["days_return"]; ?>" type="text" class="form-control" placeholder="Enter days_return">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Total_revenue</label>
                 <input name="total_revenue" value="<?php echo $roww["total_revenue"]; ?>" type="text" class="form-control" placeholder="Enter total_revenue">
                </div>
            </div>
            <!-- <div class="card-body pad">
			<label>Short Description</label>
              <div class="mb-3">
                <textarea name="short" placeholder="Short Description" style="width: 100%;" rows="5" cols="23"><?php echo $roww["short"]; ?></textarea>
              </div>
            </div> -->
            	
			<!-- <div class="card-body pad">
			<label>Full Description</label>
              <div class="mb-3">
                <textarea name="descrip" class="textarea" placeholder="Place some text here"
               type="text"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
              </div>
            </div> -->
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
