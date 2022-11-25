<?php
include './admin/conn.php';
session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);
$medians= mysqli_query($con,"SELECT * FROM orders where email='".$_SESSION['phone']."'");
$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title><?php echo $set['site_name']?></title>
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
                <a href="Recharge.php"><span class="las la-angle-left"></span></a>
                <div class="info">
                    <h5 class="bold">Transaction Details</h5>
                </div>
            </div>
        </nav>
        <nav>
           
           
       

            
        </nav>
       




  <div class=" row  g-2">
   
  

   
  </div>
 
    </header>
    <main class="bg-light">
<div class="m-20">


    </div>
    <div class="categories section-wrapper">
    <div >
             
    <div class="w3-bar w3-greens  w3-padding-3 tab"  >
  <button class="w3-bar-item w3-button" onclick="openCity('London')">Income</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Finish</button>
  
</div>
<div id="London" class="w3-container city tab1">
    <?php
while ($row =mysqli_fetch_array($medians)) {
    $id = $row['id'];

    echo "<div class='col-12 bg-light'>
    <h4 class='text-primary'>Payment of Rs " .$row['price']."</h4>
   
    <p >Order : " . $row['order_id'] . "</p>
    <p class='text-success'>status :" . $row['status'] . "</p>
  
    <p>Moblie:" . $row['email'] . "</p>
    <p class='text-info'>Transaction_Date :" . $row['transaction_date'] . "</p>
  

  <hr/>
  
    </div>";




    ?>




<?php }?>
</div>

<div id="Paris" class="w3-container city  tab2" style="display:none">
<!-- <div class="card">
<form method="POST" action="" class="p-3">
			<div class="form-inline">
				<input type="date" name="from" required="required"/>
				<input type="date"  name="to" required="required"/>
				<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span> Search</button>
			</div>
		</form>
      
	
</div> -->
 --No Data--
</div>



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

<script>
function setInputValue(){
    var input=document.getElementById('input');
    input.setAttribute("value", 350);
}
function setInputValue1(){
    var input=document.getElementById('input');
    input.setAttribute("value", 1550);
}
function setInputValue2(){
    var input=document.getElementById('input');
    input.setAttribute("value", 3350);
}

function setInputValue3(){
    var input=document.getElementById('input');
    input.setAttribute("value", 5550);
}
function setInputValue4(){
    var input=document.getElementById('input');
    input.setAttribute("value", 22550);
}
function setInputValue5(){
    var input=document.getElementById('input');
    input.setAttribute("value", 72000);
}


    </script> 


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="img/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>