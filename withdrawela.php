<?php
 include 'conn.php';
//  error_reporting(0);

 if(isset($_POST['submit'])){

// $status=$_POST['status'];
$name=$_POST['phone'];
$amount=$_POST['amount'];
$sql ="update users set  status='$status',withd='$amount' where phone='$name' ";
$que=mysqli_query($con,$sql);
if($que > 0){

    echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href ='Managebook.php'</script>";


}
else{

    echo "<script>alert('failed Successfully');</script>
	<script>window.location.href ='Managebook.php'</script>";
}

 }

?>