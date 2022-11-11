<?php
 include 'admin/conn.php';

error_reporting(0);
$sess= mysqli_query($con,"SELECT*FROM Settings");
$set =mysqli_fetch_array($sess);

$settings= mysqli_query($con,"SELECT * FROM users where bookcode is not null ");


$users= mysqli_query($con,"SELECT*FROM users");
$user =mysqli_fetch_array($users);


// $edit = $_GET['edit'];
//  $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
//  $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
    $name = $_POST['id'];
    $Event_Book_ticket = $_POST['Event_Book_ticket'];
    $Even_Category = $_POST['Even_Category'];
    $Venue = $_POST['Venue'];
    $BOOK_date = $_POST['BOOK_date'];
    $book=rand(10000,999999);

    if($name==''){

   echo "<script>alert('Record Not Found');</script>";
 
      }
      else{
        // move_uploaded_file($tempname, $folder);
        $insertdata = mysqli_query($con,"UPDATE users SET bookcode='$book', Event_Book_ticket='$Event_Book_ticket',BOOK_date='$BOOK_date',Even_Category='$Even_Category',Venue='$Venue' where id=$name");
      echo "<script>alert('Updated Successfully');</script>
          <script>window.location.href ='userlogin.php?page=reg'</script>";
      }

}


 ?>
 <?php

// $me = $_SESSION['user_id'];

?>

<div class="content">






    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title"><b>View Ticket Status</b></h3>
                </div>
                <div class="card-body">

                    <table id="example1" style="align-items: stretch;"
                        class="table table-hover w-100 table-bordered table-striped<?php //
                                                                                                                                    ?>">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Booking ID</th>
                                <th>Name</th>
                                <th>Event Theme</th>
                                <th>Tickets</th>
                                <th>Date</th>
                                <th>Venue</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php
                        while($row=mysqli_fetch_array($settings)){
                    ?>
                           
                        <tbody>
                     
                           <tr>
                           <td><?php echo $row["id"]; ?></td>
                           <!-- <td><img style="width:100px;" src="./assets/img/logo/<?php echo $row["img"]; ?>"></td> -->
                           <td><?php echo $row["bookcode"]; ?></td>
                           <td><?php echo $row["name"]; ?></td>
                           <td ><?php echo $row["Even_Category"]; ?></td>
                           <td ><?php echo $row["Event_Book_ticket"]; ?></td>
                           <td ><?php echo $row["BOOK_date"]; ?></td>
                          
                           <td ><?php echo $row["Venue"]; ?></td>
                        

                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#book">
                                       View
                                    </button>
                                </td>
                          
                            </tr>
                        
                             <div class="modal fade" id="book">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title">Booking Status</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                   <form action="" method="post">
                                   <div class="card-header">
                                    <div class="form-groups">
                                    <p><b>Name:</b>
                                                    <?php echo $user['name'];
                                                        ?>
                                                </p>
                                   
                                                <p><b>Email:</b>
                                                    <?php echo $user['email'];
                                                        ?>
                                                </p>
                                   
                                                <p><b>phone:</b>
                                                    <?php echo $user['phone'];
                                                        ?>
                                                </p>
                                                <p><b>Book Date:</b>
                                                    <?php echo $user['BOOK_date'];
                                                        ?>
                                                </p>
                                                <p><b>Booking Id:</b>
                                                    <?php echo $user['bookcode'];
                                                        ?>
                                                </p>
                                                <p class="bg-warning fa-1"><b>Status:</b>
                                                    <?php echo $user['status'];
                                                        ?>
                                                </p>
                                        
                                       
                                      
                                        </div>
                                        </div>
                                       
        
           
                                   
            <div class="card-header">
            <button type="submit"  class="btn btn-info">Close</button>
            </div>
                                   </form>
                                   

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
  
                                      <?php  } ?>
                        </tbody>
                        
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>

    </form>

</div>