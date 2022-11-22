<?php
include './admin/conn.php';
session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);

$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");


 if(isset($_POST['submit'])){

$book=rand(10000,999999);
$sql ="update users set  invitate='$book' where phone='".$_SESSION['phone']."'";
$que=mysqli_query($con,$sql);
if($que > 0){

    echo "<script>alert('Updated Successfully');</script>";
	


}
 }



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title><?php echo $set['site_name']?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
   
    <header>
    <nav>
            <div class="flex action-bar">
                <a href="page-index.php"><span class="las la-angle-left"></span></a>
                <div class="info">
                    <h5 class="bold">Teams</h5>
                </div>
            </div>
        </nav>
        <nav>
            <div>
        <h3 class="inde">Dream Home</h3>
      
        <p>We Helped build your dream's Home</p>
        <p class="text-center bg-secondary rounded"><?php echo($_SESSION['phone']);  ?></p>
  <form method="post" >
      <button class="text-center bg-danger  p-2 rounded" type="submit" name="submit">Referal</button>

      </form>
        </div>
            <div class="img3" style="background-image: url(img/wmt.png)"></div>
       

            
        </nav>
       




  <div class=" row  g-2">
   
    <div class="col-6 g-3">


              
      <div class="p-3 border bg-secondary text-white rounded"><img src="./img/wallet-filled-money-tool.png" width="30%"/>Team assets <span class="text-center">0</span></div>
    </div>
    <div class="col-6 g-3">
      <div class="p-3 border bg-warning text-white rounded"><img src="./img/hand.png" width="30%"/>Team recharge <span class="text-center">0</span></div>
      
    </div>
    <div class="col-6 pt-2">
      <div class="p-3 border bg-danger text-white rounded"><img src="./img/link.png" width="30%"/>Team Number <span class="text-center">0</span></div>
    </div>
    <div class="col-6 pt-2">
      <div class="p-3 border bg-primary text-white rounded"><img src="./img/check.png" width="30%"/>Level 1 member  <span class="text-center">0</span></div>
 
</div>
<div class="col-6 pt-2">
      <div class="p-3 border bg-info text-white rounded"><img src="./img/check.png" width="30%"/>Level 2 member  <span class="text-center">0</span></div>
    </div>
    <div class="col-6 pt-2">
      <div class="p-3 border bg-danger text-white rounded"><img src="./img/check.png" width="30%"/>Level 3 member <span class="text-center">0</span> </div>
 
</div>
  </div>

    </header>
    <main class="bg-light">
<div class="m-20">



    </div>


    </main>

    <div class="bottom-nav">
        <div class="bottom-inner">
            <div class="bottom-main">
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-home"></span>
                        <a href="page-index.php" > <p>Home</p>
                    </div>
                    <div class="nav-item">
                        <span class="las la-shopping-bag"></span>
                        <p>Teams</p>
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
                        <a href="user.php" >  <p>users</p></a>
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

<div class="modal fade" id="exampleModal1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
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
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="img/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>