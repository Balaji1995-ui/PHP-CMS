<?php
 include 'conn.php';
 error_reporting(0);
 session_start();
 if(isset($_POST['submit'])){

$status=$_POST['status'];

$book=rand(10000,999999);
$sql ="update users set  invitate='$book' where name='".$_SESSION['phone']."'";
$que=mysqli_query($con,$sql);
if($que > 0){

    echo "<script>alert('Updated Successfully');</script>";
	


}
else{

    echo "<script>alert('failed Successfully');</script>
	<script>window.location.href ='Managebook.php'</script>";
}

 }

?>