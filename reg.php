 <?php
 include 'admin/conn.php';

error_reporting(0);
$sess= mysqli_query($con,"SELECT*FROM Settings");
$set =mysqli_fetch_array($sess);

$settings= mysqli_query($con,"SELECT*FROM services ORDER BY id DESC");


$users= mysqli_query($con,"SELECT*FROM users");
$user =mysqli_fetch_array($users);


// $edit = $_GET['edit'];
//  $resultt = mysqli_query($con,"SELECT * FROM users where id='$edit'");
//  $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
    $cus=$_POST['name'];
    $cus=$_POST['phone'];
    $names = $_POST['id'];
    $Event_Book_ticket = $_POST['Event_Book_ticket'];
    $Even_Category = $_POST['Even_Category'];
    $Venue = $_POST['Venue'];
    $BOOK_date = $_POST['BOOK_date'];
    $book=rand(10000,999999);
    // $status=('pending To approval')";

    if($names==''){

        $insertdata = mysqli_query($con,"INSERT INTO USERS (name,phone,status,bookcode,Event_Book_ticket,BOOK_date,Even_Category,Venue )VALUES('$name','$phone','$book','$Event_Book_ticket','$BOOK_date','$Even_Category','$Venue')");
        echo "<script>alert('Posted Successfully');</script>
            <script>window.location.href = 'userlogin.php?page=reg'</script>";
    
        }
 
 
      else{
        // move_uploaded_file($tempname, $folder);
        $insertdata = mysqli_query($con,"UPDATE users SET bookcode='$book', Event_Book_ticket='$Event_Book_ticket',BOOK_date='$BOOK_date',Even_Category='$Even_Category',Venue='$Venue' where id=$names");
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
                    <h3 class="card-title"><b>Book Tickets</b></h3>
                </div>
                <div class="card-body">

                    <table id="example1" style="align-items: stretch;"
                        class="table table-hover w-100 table-bordered table-striped<?php //
                                                                                                                                    ?>">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Event Title</th>
                                <th>Event Theme</th>
                                <th>Max Guest</th>
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
                           <td><img style="width:100px;" src="./assets/img/logo/<?php echo $row["img"]; ?>"></td>
                           <td><?php echo $row["title"]; ?></td>
                           <td><?php echo $row["category"]; ?></td>
                           <td ><?php echo $row["max_Guest"]; ?></td>
                           <td ><?php echo $row["Create_time"]; ?></td>
                          
                           <td ><?php echo $row["Venue"]; ?></td>
                        

                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#book">
                                        Book
                                    </button>
                                </td>
                          
                            </tr>
                        
                             <div class="modal fade" id="book">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h6 class="modal-title">Book For Events</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                   <form action="" method="post">
                                   <div class="card-header">
                                    <div class="form-groups">
                                     <label>Customer Token</label>
                                    <input class="form-control" type="text"  name="id"  value=<?php echo $user['id']?>  ></input>
                                    <label>Customer Name</label>
                                    <input class="form-control" type="text"  name="name"  value=<?php echo $user['name']?>  ></input>    

                                    <label>phone No</label>
                                    <input class="form-control" type="text"  name="phone"  value=<?php echo $user['phone']?>  ></input>    
                                        <label>No of tickets</label>
                                        <input class="form-control" type="number"  name="Event_Book_ticket" placeholder="No of tickets" required></input>
                                        </div>
                                        </div>
                                        <div class="card-header">
             <div class="form-group">
                  <label>Select Category</label>
                  <select name="Even_Category" class="form-control">
                      <option>Select...</option>
                      <?php 
                      $location = mysqli_query($con,"SELECT * FROM EventCategory"); 
                      while ($location_ft = mysqli_fetch_array($location)) {   
                      ?>
                      <option <?php if($roww["category"]==$location_ft["Event_name"]){ echo 'selected'; } ?> value="<?php echo $location_ft["Event_name"]; ?>"><?php echo $location_ft["Event_name"]; ?></option>
                      <?php
                		}
                	   ?>
                  </select>
                </div>
            </div>    <div class="card-header">
           
                                    <div class="form-groups">
                                        
                                        <label>Venue</label>
                                        <input class="form-control" type="text" value="<?php echo $row["Venue"]; ?>"  name="Venue" placeholder="Venue" required></input>
                                        </div>
                                        </div>
                                        <div class="card-header">
                                        <div class="form-groups">
                                        
                                        <label>Date</label>
                                        <input class="form-control" type="date"   name="BOOK_date" placeholder="Venue" required></input>
                                        </div>
                                        </div>
                                    
            <div class="card-header">
            <input type="submit" name="publise" class="btn btn-info"></input>
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