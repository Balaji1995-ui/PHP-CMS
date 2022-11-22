<?php

require './admin/conn.php';
// error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

$today = date("D d M Y");
$edit = $_GET['id'];
 $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
//////////////

$sess= mysqli_query($con,"SELECT * FROM Settings");
$set =mysqli_fetch_array($sess);

$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");

if(isset($_POST['publise'])){
	
    $phone   = $_POST['phone'];
     $setting_login= $_POST['setting_login'];
     $confirm_login = $_POST['confirm_login'];
     $withdraw_login= $_POST['withdraw_login'];
     $invitate = $_POST['invitate'];
  
     if($phone !=="" && $setting_login!=="" && $withdraw_login !=="" && $confirm_login!=="" && $invitate!=="" && $setting_login==$confirm_login){
    
      

    
        //   move_uploaded_file($tempname, $folder);
        $insertdata = mysqli_query($con,"UPDATE users set setting_login = '$setting_login' ,confirm_login = '$confirm_login' ,widthdrwa_login ='$widthdrwa_login' where id='phone'");
      //  $insertdata = mysqli_query($con, "INSERT INTO users ( name, email, password, address, city, state, img, status, phone, Event_Book_ticket, Even_Category, Venue, BOOK_date, bookcode, country, pincode)VALUES( '$name', '$email', '$password', '$address', '$city', '$state', '$phone','$country',$pincode')");
        echo "<script>alert('SignUp Successfully');</script>
            <script>window.location.href ='index.php'</script>";
       


}

       

       
        else{

            echo  "<h6 class='text-center text-white bg-dark'>please enter the vaild detail</h6>";
        }


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>Forget | <?php echo $set['site_name']?></title>
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body class="bod">
   
    <header>
    <nav>
            <div class="flex action-bar">
                <a href="login.php"><span class="las la-angle-left"></span></a>
                <div class="info">
                    <h5>Forget Account Password</h5>
                </div>
            </div>
        </nav>
        <nav>
            <div>
        <h3 class="inde">Dream Home</h3>
      
        <p>We Helped build your dream's Home</p>
        </div>
            <div class="img3" style="background-image: url(./img/wmt.png)"></div>
       
        </nav>
        <form method="post" action="">
<div class="form-group fomr">
 
        <input class="form-control" type="text" name="phone"  placeholder="Phone Number" ></input>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="text" name="otp" placeholder="OTP code" ></input>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="password" name="setting_login" placeholder="Set New Password" ></input>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="password" name="confirm_login" placeholder="Repeat Setting" ></input>
        </div>
      
        <div class="form-group fom1">
       <button class="form-control btn btn-warning" type="submit" name="publise">Confirm</button>
   
        </div>
<a href="index.php" id="line">Confirm
Already have an
account, log in</a>
</from>
<hr></hr>


    </header>
   

    




    <!-- <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script> -->
<script src="img/js/bootstrap.min.js"></script>


</body>
</html>