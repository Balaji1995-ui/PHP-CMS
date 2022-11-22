<?php
include 'conn.php';
include 'auth.php';
// error_reporting(0);



$a=16;
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
   <?php include"topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include"sidebar.php"; ?>
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date("D d M Y");
//$edit = $_GET['edit'];

    $resultt = mysqli_query($con,"SELECT * FROM image where id='1'");
    $roww = mysqli_fetch_array($resultt);
    $edit = $roww['id'];

if(isset($_POST['publise'])){
extract($_POST);	
//$title1 = $_POST['title'];
//$title = str_replace("'","\'", $title1);
//$category = $_POST['category'];
//$descrip1 = $_POST['descrip'];
//$descrip = str_replace("'","\'", $descrip1);
//$url = $_POST['url'];


if($_FILES['image1']['name']!=''){
  $image1 = rand().$_FILES['image1']['name'];
  }
  else{
    $image1 = $roww["image1"];
  }
  $tempname = $_FILES['image1']['tmp_name'];
  $folder = "../assets/img/header/".$image1;


        // Insert image file name into database 

        if($_FILES['image2']['name']!=''){
          $image2 = rand().$_FILES['image2']['name'];
          }
          else{
            $image2 = $roww["image2"];
          }
          $tempname7 = $_FILES['image2']['tmp_name'];
          $folder7 = "../assets/img/header/".$image2;   
                                


if($_FILES['image3']['name']!=''){
$image3 = rand().$_FILES['image3']['name'];
}
else{
	$image3 = $roww["image3"];
}
$tempname9 = $_FILES['image3']['tmp_name'];
$folder9 = "../assets/img/header/".$image3;

if($_FILES['image4']['name']!=''){
  $image4 = rand().$_FILES['image4']['name'];
  }
  else{
    $image4 = $roww["image4"];
  }
  $tempname3 = $_FILES['image4']['tmp_name'];
  $folder3 = "../assets/img/header/".$image4;

  if($_FILES['image5']['name']!=''){
    $image5 = rand().$_FILES['image5']['name'];
    }
    else{
      $image5 = $roww["image5"];
    }
    $tempname4 = $_FILES['image5']['tmp_name'];
    $folder4 = "../assets/img/header/".$image5;

    if($_FILES['image7']['name']!=''){
      $image7 = rand().$_FILES['image7']['name'];
      }
      else{
        $image7 = $roww["image7"];
      }
      $tempname5 = $_FILES['image7']['tmp_name'];
      $folder5 = "../assets/img/header/".$image7;




      if($_FILES['image6']['name']!=''){
        $image6 = rand().$_FILES['image6']['name'];
        }
        else{
          $image6 = $roww["image6"];
        }
        $tempname6 = $_FILES['image6']['tmp_name'];
        $folder6 = "../assets/img/header/".$image6;



        if($_FILES['video1']['name']!=''){
          $video1 = rand().$_FILES['video1']['name'];
          }
          else{
            $video1 = $roww["video1"];
          }
          $tempname8 = $_FILES['video1']['tmp_name'];
          $folder8 = "../assets/img/header/".$video1;



//           if($_FILES['image6_para']['name']!=''){
//             $image6_para = rand().$_FILES['image6_para']['name'];
//             }
//             else{
//               $image6_para = $roww["image6_para"];
//             }
//             $tempname9 = $_FILES['image6_para']['tmp_name'];
//             $folder9 = "../assets/img/gallery/".$image6_para;


//             if($_FILES['image6_con1']['name']!=''){
//               $image6_con1 = rand().$_FILES['image6_con1']['name'];
//               }
//               else{
//                 $image6_con1 = $roww["image6_con1"];
//               }
//               $tempname10 = $_FILES['image6_con1']['tmp_name'];
//               $folder10 = "../assets/img/gallery/".$image6_con1;

// ///logos uploaded

// if($_FILES['image6_con2']['name']!=''){
//   $image6_con2 = rand().$_FILES['image6_con2']['name'];
//   }
//   else{
//     $image6_con2 = $roww["image6_con2"];
//   }
//   $tempname11 = $_FILES['image6_con2']['tmp_name'];
//   $folder11 = "../assets/img/gallery/".$image6_con2;


//   if($_FILES['image5_Day3']['name']!=''){
//     $image5_Day3 = rand().$_FILES['image5_Day3']['name'];
//     }
//     else{
//       $image5_Day3 = $roww["image5_Day3"];
//     }
//     $tempname12 = $_FILES['image5_Day3']['tmp_name'];
//     $folder12 = "../assets/img/gallery/".$image5_Day3;


//     if($_FILES['image5_Day4']['name']!=''){
//       $image5_Day4 = rand().$_FILES['image5_Day4']['name'];
//       }
//       else{
//         $image5_Day4 = $roww["image5_Day4"];
//       }
//       $tempname13 = $_FILES['image5_Day4']['tmp_name'];
//       $folder13 = "../assets/img/gallery/".$image5_Day4;
  
//       if($_FILES['image6b']['name']!=''){
//         $image6b= rand().$_FILES['image6b']['name'];
//         }
//         else{
//           $image5_Day4 = $roww["image6b"];
//         }
//         $tempname14 = $_FILES['image6b']['tmp_name'];
//         $folder14 = "../assets/img/gallery/".$image6b;

//         if($_FILES['sponsor2']['name']!=''){
//           $sponsor2= rand().$_FILES['sponsor2']['name'];
//           }
//           else{
//             $sponsor2 = $roww["sponsor2"];
//           }
//           $tempname15 = $_FILES['sponsor2']['tmp_name'];
//           $folder15 = "../assets/img/gallery/".$sponsor2;


//           if($_FILES['sponsor1']['name']!=''){
//             $sponsor1= rand().$_FILES['sponsor1']['name'];
//             }
//             else{
//               $sponsor1 = $roww["sponsor1"];
//             }
//             $tempname16 = $_FILES['sponsor1']['tmp_name'];
//             $folder16 = "../assets/img/gallery/".$sponsor1;

if($edit==''){

move_uploaded_file($tempname, $folder);
move_uploaded_file($tempname7, $folder7);
move_uploaded_file($tempname3, $folder3);
move_uploaded_file($tempname4, $folder4);
move_uploaded_file($tempname5, $folder5);
move_uploaded_file($tempname6, $folder6);
move_uploaded_file($tempname8, $folder8);
move_uploaded_file($tempname9, $folder9);

$insertdata = mysqli_query($con,"INSERT INTO image ( image1, image2, image3, image4, image5, image6, image7, video1,)VALUES(  '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', '$image7', '$video1')");

echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'settings.php'</script>";
}
else{
    move_uploaded_file($tempname9, $folder9);
    move_uploaded_file($tempname, $folder);
    move_uploaded_file($tempname7, $folder7);
    move_uploaded_file($tempname3, $folder3);
    move_uploaded_file($tempname4, $folder4);
    move_uploaded_file($tempname5, $folder5);
    move_uploaded_file($tempname6, $folder6);
    move_uploaded_file($tempname8, $folder8);


$insertdata = mysqli_query($con,"UPDATE image SET image1='$image1',image2='$image2',  image3='$image3',image4='$image4',video1='$video1' , image6='$image6', image5='$image5',image6='$image6',image7='$image7' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'settings.php'</script>";
}


}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-6">
            <h1>Gallery Page Management</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        	<form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        
    <div class="col-md-6"> 
	
          <div class="card card-outline card-info">
			<div class="card-header">
             <div class="form-group">
                <h6 class="text-danger">Images size should be-960x485</h6>
                  <label>Gallery Image 1</label>
                 <input name="image1" value="<?php echo $roww["image1"]; ?>" type="file" class="form-control" placeholder="Enter title ...">
                </div>
            </div>
            	<div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 2</label>
                 <input name="image2" value="<?php echo $roww["image2"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 3</label>
                 <input name="image3" value="<?php echo $roww["image3"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            	<div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 4</label>
                 <input name="image4" value="<?php echo $roww["image4"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 5</label>
                 <input name="image5" value="<?php echo $roww["image5"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 6</label>
                 <input name="image6" value="<?php echo $roww["image6"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
             <div class="card-header">
             <div class="form-group">
                  <label>Gallery Image 7</label>
                <input name="image7" type="file" class="form-control" placeholder="Enter">
                    
      </input>
                </div>
            </div>
            
			<!--<div class="card-body pad">
			<label>Footer Description</label>
              <div class="mb-3">
                <textarea name="footer_desc" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["footer_desc"]; ?></textarea>
              </div>
            </div>-->
            	<div class="card-header">
             <div class="form-group">
                  <label>Gallery Video 1</label>
                 <input name="video1" value="<?php echo $roww["video1"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
                <div class="card-header">
             <!-- <div class="form-group">
                  <label>When Date</label>
                 <input name="whendate" value="<?php echo $roww["whendate"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div> -->

                 <!-- <div class="form-group">
                  <label></label>
                 <input name="footer_desc" value="<?php echo $roww["footer_desc"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div> -->
              <!-- <div class="form-group">
                  <label>image5 SCHEDULE DAY 1</label>
                 <input name="image6" value="<?php echo $roww["image6"]; ?>" type="text" class="form-control" placeholder="Enter image5  8.30AM to 9.30PM...">
                </div>
              <div class="form-group">
                  <label>image5 SCHEDULE DAY 1 -SNAK</label>
                 <input name="video1" value="<?php echo $roww["video1"]; ?>" type="text" class="form-control" placeholder="Enter SNACKES...">
                </div>
                 <div class="form-group">
                  <label>image5 SCHEDULE DAY 1-details</label>
                 <input name="image6_para" value="<?php echo $roww["image6_para"]; ?>" type="text" class="form-control" placeholder="image5 Details..">
                </div>
              <div class="form-group">
                  <label>image5 SCHEDULE DAY 1-ConF</label>
                 <input name="image6_con1" value="<?php echo $roww["image6_con1"]; ?>" type="text" class="form-control" placeholder="Enter Conference data1....">
                </div>
                <div class="form-group">
                  <label>image5 SCHEDULE DAY 1-ConF2</label>
                 <input name="image6_con2" value="<?php echo $roww["image6_con2"]; ?>" type="text" class="form-control" placeholder="Enter Conference data2....">
                </div> -->
            </div> 
           
          </div>
		 
        </div>
         </div>
         <div class="col-md-12">
        
        <div class="card-header">
         <div class="form-group">
                <div class="row">
                <div class="col-sm-12">
                  <!-- text input -->
                  <div class="form-group">
            <center><button type="submit" name="publise" class="btn btn-warning btn-lg">Publish</button></center>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
      <!-- </div>
    
  </div> --> 
        
        <!-- <div class="col-md-6">
          <div class="card card-outline card-info">
	    <div class="card-header">
             <div class="form-group"> -->
                  <!-- <label>Gallery Page</label>
                 <input name="im11" value="<?php echo $roww["ima1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
                <div class="form-group">
                  <label>Blog-Image-2</label>
                 <input name="ima2" value="<?php echo $roww["ima2"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
          	 </div> -->
             <!-- <div class="col-md-3 p-3 bg-secondary">
         
       Gallery Posts
      
</div>
             <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 1 </label>
                 <input name="image5" value="<?php echo $roww["image5"]; ?>" type="file" class="form-control" placeholder="image5 Scheduler">
                </div>
            </div> 
            		<div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 2</label>
                 <input name="image7" value="<?php echo $roww["image7"]; ?>" type="file" class="form-control" placeholder="image5 Time">
                </div>
            </div> 
            <div class="card-header">
            <div class="form-group">
                  <label>Home -Gallery-Post 3</label>
                 <input name="image6" value="<?php echo $roww["image6"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
                </div> 
          <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 4</label>
                 <input name="video1" value="<?php echo $roww["video1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div> 
            <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 5</label>
                 <input name="image6_para" value="<?php echo $roww["image6_para"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div> 
           	<div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 6</label>
                 <input name="image6_con1" value="<?php echo $roww["image6_con1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div>
          <div class="col-md-4 p-3 bg-info">
         
            Sponsors ADD/Update
         
</div>
             <div class="card-header">
             <div class="form-group">
                  <label>Sponsors Headline</label>
                 <input name="image5_Day2" value="<?php echo $roww["image5_Day2"]; ?>" type="text" class="form-control" placeholder="Sponsor Headline">
                </div>
                <div class="form-group">
                  <label>Sponsors Sub_title</label>
                 <input name="image5_para" value="<?php echo $roww["image5_para"]; ?>" type="text" class="form-control" placeholder="Sponsor Subtitle">
                </div>
                <div class="col-md-3 p-3 bg-info">
         
        Sponsors Logo 
        
  </div>
               <div class="form-group">
                  <label>Logo 1</label>
                 <input name="image6b" value="<?php echo $roww[" image6b"]; ?>" type="file" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                  <label>Logo 2</label>
                 <input name="image5_Day3" value="<?php echo $roww["image5_Day3"]; ?>" type="file" class="form-control" placeholder="Country,city">
                </div>
                <div class="form-group">
                  <label>Logo 3</label>
                 <input name="image6_con2" value="<?php echo $roww["image6_con2"]; ?>" type="file" class="form-control" placeholder="Pincode">
                </div>
                <div class="form-group">
                  <label>Logo 4</label>
                 <input name="image5_Day4" value="<?php echo $roww["image5_Day4"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>
                <div class="form-group">
                  <label>Logo 5</label>
                 <input name="sponsor1" value="<?php echo $roww["sponsor1"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>
                <div class="form-group">
                  <label>Logo 6</label>
                 <input name="sponsor2" value="<?php echo $roww["sponsor2"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>-->
            <!-- </div>
     
            </div>
          
       
            </div>
          
          </div>
         
        </div>  -->
        
         
       </form>
      <!-- ./row -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->


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
