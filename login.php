<?php
 include 'admin/conn.php';
//  error_reporting(0);

 if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['pass'];
$sql ="SELECT * FROM users WHERE email='$email' and  password='$password'";
$que=mysqli_query($con,$sql);
if(mysqli_num_rows($que)>0){

    echo "<script>alert('Login Successfully');</script>
	<script>window.location.href ='userlogin.php'</script>";


}
else{

    echo "<script>alert('wrong username & password');</script>
	<script>window.location.href ='schedule.php'</script>";
}

 }

?>