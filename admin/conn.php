<?php 

// $keyId = 'rzp_test_WG1csnsMNhFWb1';
// $keySecret = 'X2ij3YolRdGIWicNEjQWTDlE';
// $displayCurrency = 'INR';

// $keyId = 'rzp_live_nvJz75Vpllw8q9';
// $keySecret = 'xpKrFnP7HgB4bkkaJJVyM8Va';
// $displayCurrency = 'INR';


$keyId = 'rzp_test_82w8nwDrvtgzaz';
$keySecret = 'Q1isHP69FYlH3AwlHjfWYOnQ';
$displayCurrency = 'INR';

$host = 'db-visual.c1s8ehgdn3pp.us-east-1.rds.amazonaws.com';

$user = "root";

$password = '9s0umq3hTjeEbAWRg2EJ';

$dbname = "invest";


// $host = "localhost";

// $user = "loapnaghar_root";

// $password = "n@=nsH,vrcOL";

// $dbname = "loapnaghar_mybook";


$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    //echo "successfuly connect";




}
else{
   //echo "Not connect";'
      

}

// Check connection




 ?>