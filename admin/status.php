<?php
 include 'conn.php';
//  error_reporting(0);

 if(isset($_POST['submit'])){

$status=$_POST['status'];
$name=$_POST['name'];
$sql ="update users set  status='$status' where name='$name' ";
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