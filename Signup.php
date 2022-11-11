
<?php

// error_reporting(0);
// // date_default_timezone_set('Asia/Kolkata');

// // $today = date("D d M Y");
// // $edit = $_GET['id'];
// //  $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
// // //  $roww = mysqli_fetch_array($resultt);

//  if(isset($_POST['publise'])){
	
//     $name = $_POST['name'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $city = $_POST['city'];
//     $state =$_POST['state'];
//     $address=$_POST['address'];
//     if($_FILES['img']['name']!=''){
//       $lis_img = rand().$_FILES['img']['name'];
//       }
//       else{
//         // $post_logo = $edit["post_logo"];
//       }
    
    
// //     // if($_FILES['lis_img']['name']!=''){
// //     // $lis_img = rand().$_FILES['lis_img']['name'];
// //     // }
// //     // else{
// //     // 	$lis_img = $roww["img"];
// //     // }
    
//     $tempname = $_FILES['img']['tmp_name'];
//     $folder = "../assets/img/users/".$img;
// //     // $valid_ext = array('png','jpeg','jpg');
// //     // file extension
// //     // $file_extension = pathinfo($folder, PATHINFO_EXTENSION);
// //     // $file_extension = strtolower($file_extension);
// //     // Check extension
// //     // if(in_array($file_extension,$valid_ext)){
// //     // // Compress Image
// //     //   // compressImage($tempname,$folder,60);
// //     // }
// $con = new mysqli('localhost','root','root','mybook');
// if($con-> connect_eror){
//     die( 'connect_eror:'.$con->error);
// }
// else
//    {
//       move_uploaded_file($tempname, $folder);
//     $insertdata = mysqli_query($con,"INSERT INTO users( name, email, password, address, city, state, img, date, status, phone)VALUES( '$name', '$email', '$password', '$address', '$city', '$state', '$img', '$date', '$status', '$phone')");
//     echo "<script>alert('SignUp Successfully');</script>
//         <script>window.location.href = 'schedule.php'</script>";
//     }
//     // else{
//     //   move_uploaded_file($tempname, $folder);
//     // $insertdata = mysqli_query($con,"UPDATE blog SET title='$title',category='$category',descrip='$descrip',img='$lis_img',url='$url',date='$today' where id=".$edit."");
//     // echo "<script>alert('Updated Successfully');</script>
//     //     <script>window.location.href = 'add-blog.php'</script>";
//     // }
    
// //     // function compressImage($source, $destination, $quality) {
    
// //     //   $info = getimagesize($source);
    
// //     //   if ($info['mime'] == 'image/jpeg') 
// //     //     $image = imagecreatefromjpeg($source);
    
// //     //   elseif ($info['mime'] == 'image/gif') 
// //     //     $image = imagecreatefromgif($source);
    
// //     //   elseif ($info['mime'] == 'image/png') 
// //     //     $image = imagecreatefrompng($source);
    
// //     //   imagejpeg($image, $destination, $quality);
    
// //     // }
//     }
    
//     // Compress image
    
    
//     ?>
    
 

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Signup| <?php echo $setting['site_name'] ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/<?php echo $setting['title_logo'] ?>">

   <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>
<main>
    <body >
<div class="container ">
<div class="row container bg-secondary mt-70">
                    <div class="col-12">
                        <h1 class="contact-title p-2 ">Sign Up</h1>
                    </div>
                    <div class="col-lg-8">
                    
                        <form class="form-contact contact_form" action="conne.php" method="post" novalidate="novalidate">
                            <div class="row">
                          
                                <div class="col-sm-6">
                             
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"  required  placeholder="Enter your name">
                                    </div>
                                </div>
                             
                                <div class="col-sm-6">
                            
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"  placeholder="Email">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                        <input class="form-control valid" name="password" id="password" type="password"  placeholder="password">
                                    </div>
                                </div> -->
                               
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" require id="password" type="password" placeholder="Enter  password">
                                    </div>
                                </div>
                                <br/>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder="Enter Phone number">
                                    </div>
                                </div>
                                <br/>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'state'" placeholder="Address"  ></textarea>
                                    </div>
                                  
                                </div>
                                <br/>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="city" id="city" type="text" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="state" id="state" type="text" placeholder="State">
                                    </div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="img" id="img" type="file" placeholder="State">
                                    </div>
                                </div> -->
                            </div>
                            
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-primary"></input>
                            </div>
                         
                          
                        </form>
                    </div>
                    <div>
    </main>

    
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
   <script src="./assets/js/jquery.validate.min.js"></script> 
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    </body>

</html>