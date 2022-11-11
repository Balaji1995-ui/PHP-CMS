<?php
 include 'admin/conn.php';
// error_reporting(0);

$edit = $_GET['edit'];
 $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
 $roww = mysqli_fetch_array($resultt);

if(isset($_POST['submit'])){


    
 

if($edit ==""){
    $insertdata = mysqli_query($con,"UPDATE users SET Event_Book_ticket='$Event_Book_ticket',BOOK_date='$BOOK_date',Even_Category='$Even_Category',Venue='$Venue' where name='$name'");
          
echo "<script>alert('Updated Successfully');</script>
    <script>window.location.href = 'userlogin.php'</script>";


    }
    else{
        
        echo "<script>alert('Record Not found');</script>";

    }
}