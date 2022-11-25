<?php
	require 'conn.php';
 
	if(ISSET($_POST['search'])){
		$from = $_POST['from'];
		$to = $_POST['to'];
		$query = mysqli_query($conn, "SELECT * FROM `orders` WHERE transaction_date BETWEEN '$from' AND '$to'") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
			echo "<tr>
				<td>".$fetch['order_id']."</td>
				<td>".$fetch['razorpay_payment_id']."</td>
				<td>".$fetch['price']."</td>
				<td>".$fetch['status']."</td>
			</tr>";
 
		}
	}else{
		$query = mysqli_query($conn, "SELECT * FROM `transaction_date`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
			echo "<tr>
				<td>".$fetch['order_id']."</td>
				<td>".$fetch['razorpay_payment_id']."</td>
				<td>".$fetch['price']."</td>
				<td>".$fetch['status']."</td>
			</tr>";
 
		}
	}
?>
