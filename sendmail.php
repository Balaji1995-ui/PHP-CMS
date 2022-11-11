<?php
error_reporting(0);
	include 'admin/conn.php';
    $edit = $_GET['edit'];
    $resultt = mysqli_query($con,"SELECT * FROM mail where id='$edit'");
    $roww = mysqli_fetch_array($resultt);

if (isset($_POST['submit'])) {
//$to = 'office@website.com';
$to = $_POST['email'];
$subject 	= 'New Enquiry';
$name 		= $_POST["name"];
$email 		= $_POST["email"];
$phone		= $_POST["phone"];
$subject2	= $_POST["subject"];
$message2	= $_POST["message"];

if($edit==''){

$insertdata = mysqli_query($con,"INSERT INTO mail(name,email,phone,subject,message)VALUES('$name','$email','$phone','$subject','$message2')");


}

$from 		= 'balakarthi3448@gmail.com';
 
	
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h2 style="color:#f40;">'.$subject.'</h2>';
$message .= '<table>
<tr>
<td>Name</td><td>: '.$name.'</td>
</tr>
<tr>
<td>Email Id</td><td>: '.$email.'</td>
</tr>
<tr>
<td>Phone</td><td>: '.$phone.'</td>
</tr>
<tr>
<td>Message</td><td>: '.$message2.'</td>
</tr>
			</table>	
				';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
	
	echo  header("Location: thanks.php");
   
} else{
    echo 'Unable to send email. Please try again.';
}
}
?>