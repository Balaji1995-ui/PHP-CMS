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
        $insertdata = mysqli_query($con,"INSERT INTO users(`phone`, `setting_login`, `confirm_login`, `withdraw_login`, `invitate`)VALUES('$phone', '$setting_login', '$confirm_login', '$withdraw_login', '$invitate')");
      //  $insertdata = mysqli_query($con, "INSERT INTO users ( name, email, password, address, city, state, img, status, phone, Event_Book_ticket, Even_Category, Venue, BOOK_date, bookcode, country, pincode)VALUES( '$name', '$email', '$password', '$address', '$city', '$state', '$phone','$country',$pincode')");
        echo "<script>alert('SignUp Successfully');</script>
            <script>window.location.href ='index.php'</script>";
       


}

       

       
        else{

            echo 
            'please enter the vaild detail';
        }


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>Home | <?php echo $set ['site_name']?></title>
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-warning">
   
    <header>
    <nav>
            <div class="flex action-bar">
                <a href="login.php"><span class="las la-angle-left"></span></a>
                <div class="info">
                    <h5>Register a New account</h5>
                </div>
            </div>
        </nav>
        <nav>
            <div>
        <h3 class="inde">Dream Home</h3>
      
        <p>We Helped build your dream's Home</p>
        </div>
            <div class="img3" style="background-image: url(img/wmt.png)"></div>
       
        </nav>
        <form method="post" action="">
<div class="form-group fomr">
 
        <input class="form-control" type="tel" name="phone"  placeholder="Phone Number" ></input>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="password"  name="setting_login"  placeholder="Setting login code" id="setting_login" ></input>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="password" name="confirm_login"  placeholder="Confirm login code"  id="Confirm login code"   onkeyup="chkpwd();"></input><span id="mess"></span>
        </div>
        <div class="form-group fom1">
        <input class="form-control" type="password"  name="withdraw_login"  placeholder="Withdraw login code" ></input>
        </div>
        <!-- <div class="form-group fom1">
        <input class="form-control" type="text"  name="phone" placeholder="Invitation code" ></input>
        </div> -->
<!--        
       <button class=" btn btn-warning"  type="button" name="publise"></button> -->
       <button type="submit" name="publise" class="form-control btn btn-warning"> 
       Register
                    </button>
     

</from>
<hr></hr>


    </header>
    <main class="bg-warning"></main>

    





<script src="img/js/bootstrap.min.js"></script>


</body>
</html>