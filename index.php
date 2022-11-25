<?php
include './admin/conn.php';

$sess= mysqli_query($con,"SELECT * FROM settings");
$set =mysqli_fetch_array($sess);

$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>Home | <?php echo $set['site_name']?></title>
    <link rel="stylesheet" href="img/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/<?php echo $set['title_logo']?> ">
<link rel="stylesheet" href="style.css">
</head>
<body class="bod">
   
    <header>
        <nav>
            <div class="info">
               <!--  <p>Hey!</p>
                <p>Let's search your grocery food</p> -->
            </div>
            <div class="img" style="background-image: url(img/wmt.png)"></div>
        </nav>
        <form method="post" action="login.php">
<div class="form-group fomr">
 
        <input class="form-control" type="text" name="phone" placeholder="Phone Number" ></input>
        </div>

        <div class="form-group fom">
        <input class="form-control" type="text"  name="setting_login"placeholder="Login code" ></input>
        </div>
        <div class="form-group fom">
       <button class="form-control btn btn-warning" name="submit">Login</button>
     
        </div>
</from>
<a href="forget.php"  id="line" class="forget">Forget Password ?</a>
   <a href="Signup.php" class="as">Register</a>
<hr></hr>

 
    </header>
  

    
    <!-- <main> -->
        <!-- <div class="categories section-wrapper"> -->
          
            <!-- <div class="grid-container">

               <div class="grid-item"id="card1">
               <span><img src="./img/wallet.png" width="46%"/></span>
                  <a href="/"><h6 class="head">Recharge</h6> </a>    

               </div>
                         <div class="grid-item1">
                         <span><img src="./img/profile.png" width="46%"/></span>
                  <a href="/"><h6 class="head text-white">Withdraw</h6>  </a>  

                         </div> -->
                  <!--   <div class="grid-item">
                    <span class="las la-ad-user"></span>
                   <h6>Invite friends</h6>   
                           </div>
                             <div class="grid-item">
                    <span class="las la-ad-user"></span>
                   <h6>Online Service</h6>   

                             </div> -->
<!-- 
            </div>
        </div> -->
        
        <!-- <div class="promo">
            <div class="items promo-items">
                <div class="promo-item">
                    <div class="promo-img" style="background-image: url(img/house1.jpg)"></div>
                    <div class="promo-info">
                        <h3>Dream Home</h3>
                        <p>We Helped build your dream's House</p>
                        <a href="#">Invest now</a>
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img" style="background-image: url(img/house2.jpg)"></div>
                    <div class="promo-info">
                        <h3>Dream Home</h3>
                        <p>We Helped build your dream's House</p>
                        <a href="#">Invest now</a>
                    </div>
                </div>

            </div>
        </div>
         -->
        <!-- <div class="w3-bar w3-green  w3-padding-3 tab"  >
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Stable</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">VIP</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Activity</button>
</div>
<div id="London" class="w3-container city tab1">

<?php
                        while($row=mysqli_fetch_array($median)){
                    ?>
<div class="card">
  <img src="img/plan/<?php echo $row['img']?>" alt="mia" style="width:100%">
  <h4><?php echo $row['Proj_title']?></h4>
  <p class="price">Invest money: ₹<?php echo $row['Invest_Money']?></p>
  <p>Cycle : <?php echo $row['cycle']?></p>
  <p>Perday return :<?php echo $row['days_return']?></p>
  <p>Total revenue :<?php echo $row['total_revenue']?></p>
  <br/>
  <p><button>Click to Buy</button></p>
  <hr></hr>
</div>

<?php }?>
</div>





<script src="img/js/bootstrap.min.js"></script>


</body>
</html>