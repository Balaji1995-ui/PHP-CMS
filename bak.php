<?php
include './admin/conn.php';
error_reporting(0);

session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);
date_default_timezone_set('Asia/Kolkata');

$today = date("D d M Y");
// $edit = $_GET['id'];
//  $resultt = mysqli_query($con,"SELECT * FROM bank_details where id='$edit'");


$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");

//id, name, phone, bank_acc, bank, ifsc, wpassword

if(isset($_POST['publise'])){
	$name = $_POST['name'];
    $phone   = $_POST['phone'];
     $bank_acc= $_POST['bank_acc'];
     $bank = $_POST['bank'];
     $ifsc= $_POST['ifsc'];
     $wpassword= $_POST['wpassword'];
  
     if($name!=="" && $phone!=="" && $bank_acc !=="" && $bank!=="" && $ifsc!=="" && $wpassword){
    
      

    
        //   move_uploaded_file($tempname, $folder);
        $insertdata = mysqli_query($con,"INSERT INTO bank_details(`name`, `phone`, `bank_acc`, `bank`, `ifsc`,`wpassword`)VALUES('$name', '$phone', '$bank_acc', '$bank', '$ifsc','$wpassword')");
      //  $insertdata = mysqli_query($con, "INSERT INTO users ( name, email, password, address, city, state, img, status, phone, Event_Book_ticket, Even_Category, Venue, BOOK_date, bookcode, country, pincode)VALUES( '$name', '$email', '$password', '$address', '$city', '$state', '$phone','$country',$pincode')");
        echo "<script>alert('Bank Details updated..!!');</script>
            <script>window.location.href ='user.php'</script>";
       


}

       

       
        else{

            echo'<div class="text-white bg-dark p-1">please enter the vaild detail</div>';
        }


}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>Bank | <?php echo $set['site_name']?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body class='bg-light'>
   
    <header>
    <nav>
            <div class="flex action-bar">
                <a href="user.php"><span class="las la-angle-left"></span></a>
                <div class="info">
                    <h5 class="bold">My Bank</h5>
                </div>
            </div>
        </nav>
      
       




  <div class=" row  g-2">
   

 
    </header>
    <main class="bg-light">

    <div class="categories section-wrapper">
    <form method="post" action="">
        <div class="form-group">
<Label>Your Name</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="name" placeholder ="Enter the Name" />
</div>
<div class="form-group">
<Label>Your Phone Number</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="phone"  max="10"  placeholder ="Enter the PhoneNumber" />
</div>
<div class="form-group">
<Label>Bank Account Number</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="bank_acc"  placeholder ="Enter the Account Number" />
</div>
<div class="form-group">
<Label>Bank Name</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="bank"  placeholder ="Enter the Bank Name" />
</div>
<div class="form-group">
<Label>IFSC Code</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="ifsc"  placeholder ="Enter the IFSC Code" />
</div>
<div class="form-group">
<Label>Withdraw Password</Label><sup class="text-danger">*</sup>
<input type="text" class="form-control" name="wpassword"  placeholder ="Password" />
</div>

<div class="form-group">
<button type="submit" name="publise" class="form-control btn btn-warning"> 
       Register
                    </button>

</div>
</form>

    <div >
             
             
                    
                 
                   
                
</div>

    </main>

    <div class="bottom-nav">
        <div class="bottom-inner">
            <div class="bottom-main">
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-home"></span>
                        <a href="page-index.php"><p>Home</p></a>
                    </div>
                    <div class="nav-item">
                        <span class="las la-shopping-bag"></span>
                        <a href="product.php"><p>Teams</p></a>
                    </div>
                </div>
                <div class="nav-item-main">
                    <div>
                        <span class="las la-shopping-action"></span>
                    </div>
                </div>
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-gift"></span>
                        <a  type="button"data-bs-toggle="modal" data-bs-target="#exampleModal"> <p> VIP</p></a>
                    </div>
                    <div class="nav-item">
                        <span class="las la-users"></span>
                     <a href="user.php">  <p>users</p> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

</div>


<div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
    <h6>How to increase VIP Level</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="./img/bg.jpg" width="100%"/>
   
      </div>

    </div>
  </div>
</div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="img/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>