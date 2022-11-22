<?php
include './admin/conn.php';
error_reporting(0);

session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);
date_default_timezone_set('Asia/Kolkata');

//  error_reporting(0);

 if(isset($_POST['submit'])){
    $today = date("D d M Y");

    $amount=$_POST['amount'];

$sql ="update users set  status='pending',on_order='$today',withd='$amount'  where phone='".$_SESSION['phone']."'";
$que=mysqli_query($con,$sql);
if($que > 0 ){

    echo "<script>alert('Payment will be received shortly');</script>
	<script>window.location.href ='users.php'</script>";


}
else{

    echo "<script>alert('failed Successfully');</script>
	<script>window.location.href ='index.php'</script>";
}

 }



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title> <?php echo $set['site_name']?></title>
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
                    <h5 class="bold">About US</h5>
                </div>
            </div>
        </nav>
      
       




  <div class=" row  g-2">
   

 
    </header>
    <main class="bg-light">

    <div class="categories section-wrapper">
   <h1>WMT </h1>
<p>Welcome to our FP Markets review on our best forex broker comparison 2022, where we talk about one of the biggest brokers in the world. Based in Australia and allowing international clients to participate, the broker uses ECN pricing and Direct Market Access to CFDs. This results an attraction to the traders and makes FP Markets on the top of our forex broker comparison list.

With their selection, it is easy to see why people would prefer to use FP Markets real accounts and their efficient methods of trading and blazing fast execution speeds.

FP Markets is the best platform for forex trading when it comes to the variety of what they offer:</p>
<p>High leverage of up to 500:1<br/>
Near-instant execution<br/>
Hosts popular forex platforms<br/>
Free demo account available<br/>
A variety of CFD instruments</p>          
                    
                 
                   
                
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