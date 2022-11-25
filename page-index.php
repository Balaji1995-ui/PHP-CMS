<?php
include './admin/conn.php';
session_start();
$sess= mysqli_query($con,"SELECT * FROM settings");
$set =mysqli_fetch_array($sess);
error_reporting(0);
$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail");

$medians = mysqli_query($con,"SELECT * FROM tbl_plan_detail");
$media = mysqli_query($con,"SELECT * FROM tbl_plan_detail");
$wallets = mysqli_query($con,"select sum(price) from orders where email='".$_SESSION['phone']."'" );
$sets =mysqli_fetch_array($wallets);
$today = date("D d M Y");
// $edit = $_GET['email'];
//  $resultt = mysqli_query($con,"SELECT * FROM order where id='$edit'");;


if(isset($_POST['publise'])){
  $phone   = $_POST['email'];
  $amount= $_POST['price'];
  $value=$_POST['value'];

  if($phone!=="" && $amount > 0 ){
    $insertdata = mysqli_query($con,"UPDATE orders SET price='$value'-'$amount' where email='".$_SESSION['phone']."'");
    
  }
  else{

echo "<script>alert('insufficient funds...!!')</script>";

  }



}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>Home | <?php echo $set['site_name']?></title>
  
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body>
   
    <header>
        <nav>
            <div class="info">
               <!--  <p>Hey!</p>
                <p>Let's search your grocery food</p> -->
            </div>
            <div class="img" style="background-image: url(img/wmt.png)"></div>
        </nav>
        
    </header>
    
    <main>
        <div class="categories section-wrapper">
          
            <div class="grid-container ">

               <div class=" bg-info grid-item"id="card1" >
               <span><img src="./img/wallet.png" width="46%"/></span>
                  <a href="Recharge.php" style="text-decoration:none;"><h6 class="head">Recharge</h6> </a>    

               </div>
                         <div class="grid-item1 bg-secondary" id="card1">
                         <span><img src="./img/profile.png" width="46%"/></span>
                  <a href="withdrawel.php" style="text-decoration:none;"><h6 class="head text-white">Withdraw</h6>  </a>  

                         </div>
                  <!--   <div class="grid-item">
                    <span class="las la-ad-user"></span>
                   <h6>Invite friends</h6>   
                           </div>
                             <div class="grid-item">
                    <span class="las la-ad-user"></span>
                   <h6>Online Service</h6>   

                             </div> -->

            </div>
        </div>
        
        <div class="promo">
            <div class="items promo-items">
                <div class="promo-item">
                    <div class="promo-img" style="background-image: url(img/house1.jpg)"></div>
                    <div class="promo-info">
                        <h3>Dream Home</h3>
                        <p>We Helped build your dream's House</p>
                        <a href="Recharge.php" style="text-decoration:none;">Invest now</a>
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img" style="background-image: url(img/house2.jpg)"></div>
                    <div class="promo-info">
                        <h3>Dream Home</h3>
                        <p>We Helped build your dream's House</p>
                        <a href="Recharge.php" style="text-decoration:none;" >Invest now</a>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="w3-bar w3-greens  w3-padding-3 tab"  >
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Stable</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">VIP</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Activity</button>
</div>
<div id="London" class="w3-container city tab1">



   



<?php
                      
while ($row =mysqli_fetch_array($medians)) {
  
  $id = $row['id'];
  
  echo "<div class='card'>
  <img src='img/".$row['img']."'/>
  <h4 class='text-danger'>" .$row['Proj_title']."</h4>
 
  <p class='price'>" . $row['Invest_Money'] . "</p>
  <p>Cycle :" . $row['cycle'] . "</p>

  <p>Perday return :" . $row['days_return'] . "</p>
  <p>Total revenue :" . $row['total_revenue'] . "</p>

  <p>
  <button data-bs-toggle='modal' data-bs-target='#example$id'>Click to Buy</button>

  </p>


  </div>";

  
  

?>





<div class="modal fade" id="example<?php echo $id ?>"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h5 class="text-center"> Do you want to buy this contract?</h5>
      <br/>
      
     <h5  class='text-center text-danger' ><?php echo $row['Invest_Money'] ?> </h5>
                                                
                                                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">NO</button>
        <button type="button" class="btn btn-warning" data-bs-toggle='modal' data-bs-target='#exampleModalas'>Buy</button>
      </div>
    </div>
  </div>
</div>                   


<div class="modal fade" id="exampleModalas"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" >
<input class="form-control" type="hidden" name="email" value="<?php echo($_SESSION['phone']);?>"> </input>
      <br/>

      <label>Wallet Amount</label>
      <input class="form-control input1" name="amount"   value="<?php echo($sets['sum(price)']);?>" placeholder="Money Add"> </input>
      <br/>
      <input class="form-control" name="value" placeholder="invest amount" > </input>

     <h5  class='text-center text-danger' ></h5>
                                                
                                                       
      </div>
      <div class="modal-footer">

        <button type="submit" name="publise" class="btn btn-warning">Add</button>
      </div>
</form>
    </div>
  </div>
</div>  

<?php }?>

</div>

<div id="Paris" class="w3-container city  tab2" style="display:none">

<?php
                      
while ($row =mysqli_fetch_array($median)) {
  
  $id = $row['id'];
  
  echo "<div class='card'>
  <img src='img/".$row['img']."'/>
  <h4 class='text-danger'>" .$row['Proj_title']."</h4>
 
  <p class='price'>" . $row['Invest_Money'] . "</p>
  <p>Cycle :" . $row['cycle'] . "</p>

  <p>Perday return :" . $row['days_return'] . "</p>
  <p>Total revenue :" . $row['total_revenue'] . "</p>

  <p>
  <button data-bs-toggle='modal' data-bs-target='#exampleModal$id'>Click to Buy</button>

  </p>


  </div>";

  
  

?>





<div class="modal fade" id="exampleModal<?php echo $id ?>"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h5 class="text-center"> Do you want to buy this contract?</h5>
      <br/>
      
     <h5  class='text-center text-danger' ><?php echo $row['Invest_Money'] ?> </h5>
                                                
                                                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">NO</button>
        <button type="button" class="btn btn-warning" data-bs-toggle='modal' data-bs-target='#exampleModala'>Buy</button>
      </div>
    </div>
  </div>
</div>                   


<div class="modal fade" id="exampleModala"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" >
<input class="form-control" name="email" value="<?php echo($_SESSION['phone']);?>"> </input>
      <br/>

      
      <input class="form-control input1" name="amount"   value="<?php echo($sets['sum(price)']);?>" placeholder="Money Add"> </input>
      <br/>
      <input class="form-control" name="value" placeholder="invest amount" > </input>

     <h5  class='text-center text-danger' ></h5>
                                                
                                                       
      </div>
      <div class="modal-footer">

        <button type="submit" name="publise" class="btn btn-warning">Add</button>
      </div>
</form>
    </div>
  </div>
</div>  

<?php }?>


</div>

<div id="Tokyo" class="w3-container city  tab3" style="display:none">
<?php
                      
while ($row =mysqli_fetch_array($media)) {
  
  $id = $row['id'];
  
  echo "<div class='card'>
  <img src='img/".$row['img']."'/>
  <h4 class='text-danger'>" .$row['Proj_title']."</h4>
 
  <p class='price'>" . $row['Invest_Money'] . "</p>
  <p>Cycle :" . $row['cycle'] . "</p>

  <p>Perday return :" . $row['days_return'] . "</p>
  <p>Total revenue :" . $row['total_revenue'] . "</p>

  <p>
  <button data-bs-toggle='modal' data-bs-target='#examples$id'>Click to Buy</button>

  </p>


  </div>";

  
  

?>





<div class="modal fade" id="examples<?php echo $id ?>"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <h5 class="text-center"> Do you want to buy this contract?</h5>
      <br/>
      
     <h5  class='text-center text-danger' ><?php echo $row['Invest_Money'] ?> </h5>
                                                
                                                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">NO</button>
        <button type="button" class="btn btn-warning" data-bs-toggle='modal' data-bs-target='#exampleModalasa'>Buy</button>
      </div>
    </div>
  </div>
</div>                   


<div class="modal fade" id="exampleModalasa"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" >
<input class="form-control" name="email" value="<?php echo($_SESSION['phone']);?>"> </input>
      <br/>

      
      <input class="form-control input1" name="amount"   value="<?php echo($sets['sum(price)']);?>" placeholder="Money Add"> </input>
      <br/>
      <input class="form-control" name="value" placeholder="invest amount" > </input>

     <h5  class='text-center text-danger' ></h5>
                                                
                                                       
      </div>
      <div class="modal-footer">

        <button type="submit" name="publise" class="btn btn-warning">Add</button>
      </div>
</form>
    </div>
  </div>
</div>  

<?php }?>
</div>

</div>





   
    </main>
    
    
    <div class="bottom-nav">
        <div class="bottom-inner">
            <div class="bottom-main">
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-home"></span>
                        <a href="page-index.php"   style="text-decoration:none;"><p>Home</p></a>
                    </div>
                    <div class="nav-item">
                        <span class="las la-shopping-bag"></span>
                       <a href="product.php" style="text-decoration:none;"> <p>Teams</p></a>
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
                        <a  type="button"data-bs-toggle="modal" data-bs-target="#exampleModal1"> <p> VIP</p></a>
                    </div>
                    <div class="nav-item">
                        <span class="las la-users"></span>
                        <a href="user.php" style="text-decoration:none;"> <p>users</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

</div>
<div class="modal fade" id="exampleModal1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

<script>


  </script>
<script src="img/js/bootstrap.min.js"></script>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>
   <script src="https://ajax.googleapis.com/ajex/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>