<?php
include './admin/conn.php';
session_start();
$sess= mysqli_query($con,"select * from settings");
$set =mysqli_fetch_array($sess);

$median = mysqli_query($con,"SELECT * FROM tbl_plan_detail ORDER BY id ASC");
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
                    <h5 class="bold">Recharge</h5>
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
        
      <form action="pay.php" method="post">     
      
     <h6>Enter amount:  </h6>
  
 
                   <input class="form-control" placeholder="Enter the amount" name="price" id="input"/>
              
                    <hr />
                    <!-- <h6>Name:  </h6>
  
 
  <input class="form-control" placeholder="Enter the Name" name="customername" id="input"/> -->
                    <div class=" row  g-2">
   
   <div class="col-12 ">
                   <h5>Fast Charging:</h5>
                   
                   <div class="p-7" ><button class="btn btn-light p-3" onclick="setInputValue()"> ₹ 350</button>
                   <button class="btn btn-light p-3" onclick="setInputValue1()"> ₹ 1550</button>
                   <button class="btn btn-light p-3" onclick="setInputValue2()"> ₹ 3350</button>
                </div>
                
     <di class="col-12">
     <div class="p-7" ><button class="btn btn-light p-3" onclick="setInputValue3()">₹ 5550</button>
                   <button class="btn btn-light p-3" onclick="setInputValue4()">₹ 22550</button>
                   <button class="btn btn-light p-3" onclick="setInputValue5()">₹ 72000</button>
                   </div>
                </div>
                </div>
                <input class="form-control" value="<?php echo($_SESSION['phone']);?>" name="contact" id="input"/>     
              <hr/>
<p>1.Do not transfer money to strangers</p>
<p>2.Do not keep the old account recharge</p>
<p>3.Fill in the UTR correctly, and the funds will arrive immediately</p>
<p>4.If you encounter problems, please contact the official customer service immediately</p>
<hr/>

                    <div class="col-12 form-group">
               <input class="btn btn-danger text-white fom" type="submit" name="submit" >Confirm Recharge</input>
               </div>
               </form>    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="img/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>