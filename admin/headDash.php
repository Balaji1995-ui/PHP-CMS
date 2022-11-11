<?php
include 'conn.php';
include 'auth.php';
error_reporting(0);
$a=12;
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

    $resultt = mysqli_query($con,"SELECT * FROM header where id='1'");
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


if($_FILES['title_img']['name']!=''){
  $title_img = rand().$_FILES['title_img']['name'];
  }
  else{
    $title_img = $roww["title_img"];
  }
  $tempname = $_FILES['title_img']['tmp_name'];
  $folder = "../assets/img/header/".$title_img;


        // Insert image file name into database 

        if($_FILES['blog_img']['name']!=''){
          $blog_img = rand().$_FILES['blog_img']['name'];
          }
          else{
            $blog_img = $roww["blog_img"];
          }
          $tempname3 = $_FILES['blog_img']['tmp_name'];
          $folder3 = "../assets/img/header".$blog_img;      
                                


if($_FILES['blog_img1']['name']!=''){
$blog_img1 = rand().$_FILES['blog_img1']['name'];
}
else{
	$blog_img1 = $roww["blog_img1"];
}
$tempname2 = $_FILES['blog_img1']['tmp_name'];
$folder2 = "../assets/img/header/".$blog_img1;

if($_FILES['blog_img2']['name']!=''){
  $blog_img2 = rand().$_FILES['blog_img2']['name'];
  }
  else{
    $blog_img2 = $roww["blog_img2"];
  }
  $tempname4 = $_FILES['blog_img2']['tmp_name'];
  $folder4 = "../assets/img/header/".$blog_img2;

  if($_FILES['Event']['name']!=''){
    $Event = rand().$_FILES['Event']['name'];
    }
    else{
      $Event = $roww["Event"];
    }
    $tempname5 = $_FILES['Event']['tmp_name'];
    $folder5 = "../assets/img/gallery/".$Event;

    if($_FILES['Event_Day1a']['name']!=''){
      $Event_Day1a = rand().$_FILES['Event_Day1a']['name'];
      }
      else{
        $Event_Day1a = $roww["Event_Day1a"];
      }
      $tempname6 = $_FILES['Event_Day1a']['tmp_name'];
      $folder6 = "../assets/img/gallery/".$Event_Day1a;




      if($_FILES['Event_Day1']['name']!=''){
        $Event_Day1 = rand().$_FILES['Event_Day1']['name'];
        }
        else{
          $Event_Day1 = $roww["Event_Day1"];
        }
        $tempname7 = $_FILES['Event_Day1']['tmp_name'];
        $folder7 = "../assets/img/gallery/".$Event_Day1;



        if($_FILES['Event_Day1_sha']['name']!=''){
          $Event_Day1_sha = rand().$_FILES['Event_Day1_sha']['name'];
          }
          else{
            $Event_Day1_sha = $roww["Event_Day1_sha"];
          }
          $tempname8 = $_FILES['Event_Day1_sha']['tmp_name'];
          $folder8 = "../assets/img/gallery/".$Event_Day1_sha;



          if($_FILES['Event_Day1_para']['name']!=''){
            $Event_Day1_para = rand().$_FILES['Event_Day1_para']['name'];
            }
            else{
              $Event_Day1_para = $roww["Event_Day1_para"];
            }
            $tempname9 = $_FILES['Event_Day1_para']['tmp_name'];
            $folder9 = "../assets/img/gallery/".$Event_Day1_para;


            if($_FILES['Event_Day1_con1']['name']!=''){
              $Event_Day1_con1 = rand().$_FILES['Event_Day1_con1']['name'];
              }
              else{
                $Event_Day1_con1 = $roww["Event_Day1_con1"];
              }
              $tempname10 = $_FILES['Event_Day1_con1']['tmp_name'];
              $folder10 = "../assets/img/gallery/".$Event_Day1_con1;

///logos uploaded

if($_FILES['Event_Day1_con2']['name']!=''){
  $Event_Day1_con2 = rand().$_FILES['Event_Day1_con2']['name'];
  }
  else{
    $Event_Day1_con2 = $roww["Event_Day1_con2"];
  }
  $tempname11 = $_FILES['Event_Day1_con2']['tmp_name'];
  $folder11 = "../assets/img/gallery/".$Event_Day1_con2;


  if($_FILES['Event_Day3']['name']!=''){
    $Event_Day3 = rand().$_FILES['Event_Day3']['name'];
    }
    else{
      $Event_Day3 = $roww["Event_Day3"];
    }
    $tempname12 = $_FILES['Event_Day3']['tmp_name'];
    $folder12 = "../assets/img/gallery/".$Event_Day3;


    if($_FILES['Event_Day4']['name']!=''){
      $Event_Day4 = rand().$_FILES['Event_Day4']['name'];
      }
      else{
        $Event_Day4 = $roww["Event_Day4"];
      }
      $tempname13 = $_FILES['Event_Day4']['tmp_name'];
      $folder13 = "../assets/img/gallery/".$Event_Day4;
  
      if($_FILES['Event_Day1b']['name']!=''){
        $Event_Day1b= rand().$_FILES['Event_Day1b']['name'];
        }
        else{
          $Event_Day4 = $roww["Event_Day1b"];
        }
        $tempname14 = $_FILES['Event_Day1b']['tmp_name'];
        $folder14 = "../assets/img/gallery/".$Event_Day1b;

        if($_FILES['sponsor2']['name']!=''){
          $sponsor2= rand().$_FILES['sponsor2']['name'];
          }
          else{
            $sponsor2 = $roww["sponsor2"];
          }
          $tempname15 = $_FILES['sponsor2']['tmp_name'];
          $folder15 = "../assets/img/gallery/".$sponsor2;


          if($_FILES['sponsor1']['name']!=''){
            $sponsor1= rand().$_FILES['sponsor1']['name'];
            }
            else{
              $sponsor1 = $roww["sponsor1"];
            }
            $tempname16 = $_FILES['sponsor1']['tmp_name'];
            $folder16 = "../assets/img/gallery/".$sponsor1;

if($edit==''){

move_uploaded_file($tempname, $folder);
move_uploaded_file($tempname2, $folder2);
move_uploaded_file($tempname3, $folder3);
move_uploaded_file($tempname4, $folder4);
move_uploaded_file($tempname5, $folder5);
move_uploaded_file($tempname6, $folder6);
move_uploaded_file($tempname7, $folder7);
move_uploaded_file($tempname8, $folder8);
move_uploaded_file($tempname9, $folder9);
move_uploaded_file($tempname10, $folder10);
move_uploaded_file($tempname11, $folder11);
move_uploaded_file($tempname12, $folder12);
move_uploaded_file($tempname13, $folder13);
move_uploaded_file($tempname14, $folder14);
move_uploaded_file($tempname15, $folder15);
move_uploaded_file($tempname16, $folder16);
$insertdata = mysqli_query($con,"INSERT INTO header ( sponsor1,sponsor2,Event_Day1_con2,Event_Day4,Event_Day1b,Event_Day3, Event_Day2,Event_Day1a,Event_Day1_con1, Event_Day1_para,Event_Day1_sha, Event_Day1,Event_para,Event,title,blog_img1,blog_img2, sub_title,whendate, title_img,blog_para_sub, blog_head,blog_para blog_img, Address)VALUES(  '$sponsor1','$sponsor2', '$Event_Day1_con1','$Event_Day1_para','$Event_Day2','$Event_Day1_sha','$Event_Day1', '$Event_para','$title','$blog_para','$whendate','$blog_para_sub','$sub_title','$title_img','$blog_head','$blog_img','$Address' $blog_img1,$blog_img2,$Event,$Event_Day4,$Event_Day1b,$Event_Day3,$Event_Day1_con2)");

echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'settings.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);
move_uploaded_file($tempname2, $folder2);
move_uploaded_file($tempname3, $folder3);
move_uploaded_file($tempname4, $folder4);
move_uploaded_file($tempname5, $folder5);
move_uploaded_file($tempname6, $folder6);
move_uploaded_file($tempname7, $folder7);
move_uploaded_file($tempname8, $folder8);
move_uploaded_file($tempname9, $folder9);
move_uploaded_file($tempname10, $folder10);
move_uploaded_file($tempname11, $folder11);
move_uploaded_file($tempname12, $folder12);
move_uploaded_file($tempname13, $folder13);
move_uploaded_file($tempname14, $folder14);
move_uploaded_file($tempname15, $folder15);
move_uploaded_file($tempname16, $folder16);
$insertdata = mysqli_query($con,"UPDATE header SET sponsor1='$sponsor1',sponsor2='$sponsor2',  Event_Day2='$Event_Day2',Event_Day1a='$Event_Day1a',Event_Day1_sha='$Event_Day1_sha' , Event_Day1='$Event_Day1', Event='$Event',Event_para='$Event_para',blog_img1='$blog_img1',blog_img2='$blog_img2',title='$title', blog_para_sub='$blog_para_sub',sub_title='$sub_title',whendate='$whendate',title_img='$title_img',blog_para='$blog_para' ,blog_head='$blog_head',Address='$Address' ,blog_img='$blog_img' ,Event_Day1_para='$Event_Day1_para' ,Event_Day1_con1='$Event_Day1_con1' ,Event_Day4='$Event_Day4',Event_Day1b='$Event_Day1b',Event_Day3='$Event_Day3', Event_Day1_con2='$Event_Day1_con2' where id=".$edit."");
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
            <h1>Home Page Management</h1>
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
                  <label>Slide HeaderText</label>
                 <input name="title" value="<?php echo $roww["title"]; ?>" type="text" class="form-control" placeholder="Enter title ...">
                </div>
            </div>
            	<div class="card-header">
             <div class="form-group">
                  <label>Slider Sub Text</label>
                 <input name="sub_title" value="<?php echo $roww["sub_title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Title Image</label>
                 <input name="title_img" value="<?php echo $roww["title_img"]; ?>" type="file" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            	<div class="card-header">
             <div class="form-group">
                  <label>Blog Header</label>
                 <input name="blog_head" value="<?php echo $roww["blog_head"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Blog Paragaraph</label>
                 <input name="blog_para" value="<?php echo $roww["blog_para"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Blog Sub Paragaraph</label>
                 <input name="blog_para_sub" value="<?php echo $roww["blog_para_sub"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
             <div class="card-header">
             <div class="form-group">
                  <label>Blog Image</label>
                <input name="blog_img" type="file" class="form-control" placeholder="Enter">
                    <?php echo $roww["blog_img"]; ?>
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
                  <label>Address of Header</label>
                 <input name="Address" value="<?php echo $roww["Address"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="card-header">
             <div class="form-group">
                  <label>When Date</label>
                 <input name="whendate" value="<?php echo $roww["whendate"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>

                 <!-- <div class="form-group">
                  <label></label>
                 <input name="footer_desc" value="<?php echo $roww["footer_desc"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div> -->
              <!-- <div class="form-group">
                  <label>EVENT SCHEDULE DAY 1</label>
                 <input name="Event_Day1" value="<?php echo $roww["Event_Day1"]; ?>" type="text" class="form-control" placeholder="Enter EVENT  8.30AM to 9.30PM...">
                </div>
              <div class="form-group">
                  <label>EVENT SCHEDULE DAY 1 -SNAK</label>
                 <input name="Event_Day1_sha" value="<?php echo $roww["Event_Day1_sha"]; ?>" type="text" class="form-control" placeholder="Enter SNACKES...">
                </div>
                 <div class="form-group">
                  <label>EVENT SCHEDULE DAY 1-details</label>
                 <input name="Event_Day1_para" value="<?php echo $roww["Event_Day1_para"]; ?>" type="text" class="form-control" placeholder="Event Details..">
                </div>
              <div class="form-group">
                  <label>EVENT SCHEDULE DAY 1-ConF</label>
                 <input name="Event_Day1_con1" value="<?php echo $roww["Event_Day1_con1"]; ?>" type="text" class="form-control" placeholder="Enter Conference data1....">
                </div>
                <div class="form-group">
                  <label>EVENT SCHEDULE DAY 1-ConF2</label>
                 <input name="Event_Day1_con2" value="<?php echo $roww["Event_Day1_con2"]; ?>" type="text" class="form-control" placeholder="Enter Conference data2....">
                </div> -->
            </div> 
           
          </div>
		 
        </div>
         </div>
   
        
        <div class="col-md-6">
          <div class="card card-outline card-info">
	    <div class="card-header">
             <div class="form-group">
                  <label>Blog-Image-1 -Image should be 334x321</label>
                 <input name="blog_img1" value="<?php echo $roww["blog_img1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
                <div class="form-group">
                  <label>Blog-Image-2</label>
                 <input name="blog_img2" value="<?php echo $roww["blog_img2"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
          	 </div>
             <div class="col-md-3 p-3 bg-secondary">
         
       Gallery Posts
      
</div>
             <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 1 </label>
                 <input name="Event" value="<?php echo $roww["Event"]; ?>" type="file" class="form-control" placeholder="Event Scheduler">
                </div>
            </div> 
            		<div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 2</label>
                 <input name="Event_Day1a" value="<?php echo $roww["Event_Day1a"]; ?>" type="file" class="form-control" placeholder="Event Time">
                </div>
            </div> 
            <div class="card-header">
            <div class="form-group">
                  <label>Home -Gallery-Post 3</label>
                 <input name="Event_Day1" value="<?php echo $roww["Event_Day1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
                </div> 
          <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 4</label>
                 <input name="Event_Day1_sha" value="<?php echo $roww["Event_Day1_sha"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div> 
            <div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 5</label>
                 <input name="Event_Day1_para" value="<?php echo $roww["Event_Day1_para"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div> 
           	<div class="card-header">
             <div class="form-group">
                  <label>Home -Gallery-Post 6</label>
                 <input name="Event_Day1_con1" value="<?php echo $roww["Event_Day1_con1"]; ?>" type="file" class="form-control" placeholder="URL">
                </div>
            </div>
          <div class="col-md-4 p-3 bg-info">
         
            Sponsors ADD/Update
         
</div>
             <div class="card-header">
             <div class="form-group">
                  <label>Sponsors Headline</label>
                 <input name="Event_Day2" value="<?php echo $roww["Event_Day2"]; ?>" type="text" class="form-control" placeholder="Sponsor Headline">
                </div>
                <div class="form-group">
                  <label>Sponsors Sub_title</label>
                 <input name="Event_para" value="<?php echo $roww["Event_para"]; ?>" type="text" class="form-control" placeholder="Sponsor Subtitle">
                </div>
                <div class="col-md-3 p-3 bg-info">
         
        Sponsors Logo 
        
  </div>
               <div class="form-group">
                  <label>Logo 1</label>
                 <input name="Event_Day1b" value="<?php echo $roww[" Event_Day1b"]; ?>" type="file" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                  <label>Logo 2</label>
                 <input name="Event_Day3" value="<?php echo $roww["Event_Day3"]; ?>" type="file" class="form-control" placeholder="Country,city">
                </div>
                <div class="form-group">
                  <label>Logo 3</label>
                 <input name="Event_Day1_con2" value="<?php echo $roww["Event_Day1_con2"]; ?>" type="file" class="form-control" placeholder="Pincode">
                </div>
                <div class="form-group">
                  <label>Logo 4</label>
                 <input name="Event_Day4" value="<?php echo $roww["Event_Day4"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>
                <div class="form-group">
                  <label>Logo 5</label>
                 <input name="sponsor1" value="<?php echo $roww["sponsor1"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>
                <div class="form-group">
                  <label>Logo 6</label>
                 <input name="sponsor2" value="<?php echo $roww["sponsor2"]; ?>" type="file" class="form-control" placeholder="Mon to Fri 9am to 6pm">
                </div>
            </div>
     
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
          
          </div>
        
      </div>
       </form>
      <!-- ./row -->
    </section>
    <!-- /.content -->

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
