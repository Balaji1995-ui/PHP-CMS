<?php


session_start();
 include 'admin/conn.php';
//  error_reporting(0);

 if(isset($_POST['submit'])){

$phone=$_POST['phone'];
$password=$_POST['setting_login'];
$sql ="SELECT * FROM users WHERE phone='$phone' and  setting_login='$password'";
$que=mysqli_query($con,$sql);
if(mysqli_num_rows($que)>0){
$_SESSION['phone']=$phone;

echo "<script>alert('Login Successfully');</script>

<script>window.location.href ='page-index.php'</script>";

}
else{

echo "<script>alert('wrong username & password')</script>
	<script>window.location.href ='index.php'</script>";
}

 }

?>



	</body>
	</html>