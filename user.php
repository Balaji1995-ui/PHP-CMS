<?php
include './admin/conn.php';
session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);

$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");

$wallet = mysqli_query($con,"select sum(price) from orders where email='".$_SESSION['phone']."'" );




 if(isset($_POST['submit'])){

$status=$_POST['status'];
$name=$_POST['name'];
$sql ="update users set  status='$status' where name='$name' ";
$que=mysqli_query($con,$sql);
if($que > 0){

    // echo "<script>alert('Updated Successfully');</script>
	// <script>window.location.href ='Managebook.php'</script>";


}
else{

    echo "<script>alert('failed Successfully');</script>
	<script>window.location.href ='Managebook.php'</script>";
}

 }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>User | <?php echo $set['site_name']?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
                    <h5 class="bold">Let's Money</h5>
                </div>
            </div>
        </nav>
        <nav>
            <div>
        <h3 class="inde">Dream Home</h3>
      
        <p>We Helped build your dream's Home</p>
        <p class="text-center bg-secondary rounded p-2"><?php echo($_SESSION['phone']);  ?> <span> <a href="DataSecure.php"><img src="./img/notes.png" width="10%"/></a></span></p>
     
        </div>
            <div class="img3" style="background-image: url(img/wmt.png)"></div>
       

            
        </nav>
       




  <div class=" row  g-2">
   
    <div class="col-12">


              
      <div class=" fs-1 p-4 border bg-light  text-dark rounded-1 font">Wallet/Fixed assets<span class="text-center  m-3 pt-3">
        <?php
      while ($row =mysqli_fetch_array($wallet)) {
        
        ?>
        <h1 class="text-center font"><?php echo $row['sum(price)']?></h1></span></div>
        
        <?php }?>
    </div>

   
  </div>
 
    </header>
    <main class="bg-light">
<div class="m-20">



    </div>
    <div class="categories section-wrapper">
    <div >
             
                   <a href="transaction.php"  id="line1">
     <h6> <img src="./img/transaction.png" width="10%"/> Transaction Details     <span class="las la-angle-right"></span></h6>
                    </a>
                    <hr />
                    <!-- <a href="AccountD.php"  id="line1">
                    <h6> <img src="./img/financial-report.png" width="10%"/>Account Record   <span class="las la-angle-right"></span></h6>
                    </a>
                    <hr/> -->
                    <a href="About.php"  id="line1">
                    <h6><img src="./img/info.png" width="8%"/> About US  <span class="las la-angle-right"></span></h6>
                    </a>
                    <hr/>
                    <a href="index.php"  id="line1">
                    <h6><img src="./img/logout.png" width="8%"/> Log out <span class="las la-angle-right"></span></h6>
                    </a>

                
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