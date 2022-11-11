
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
 

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Panel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link <?php if($a==1){ echo 'active'; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="settings.php" class="nav-link <?php if($a==2){ echo 'active'; }?>">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
		   <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">Event Management</h5>
			</li>
      <li class="nav-item has-treeview menu-open">
            <a href="EventCategory.php" class="nav-link <?php if($a==13){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                Add Event Category
              </p>
            </a>
          </li> 
		  <li class="nav-item has-treeview menu-open">
            <a href="add-services.php" class="nav-link <?php if($a==3){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
               Add Events
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview menu-open">
            <a href="view-services.php" class="nav-link <?php if($a==4){ echo 'active'; }?>">
               <i class="fa fa-eye nav-icon"></i>
              <p>
                View Events 
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">User Management</h5>
			</li>
      <li class="nav-item has-treeview menu-open">
            <a href="Managebook.php" class="nav-link <?php if($a==14){ echo 'active'; }?>">
               <i class="fa fa-users nav-icon"></i>
              <p>
               Manage Booking
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview menu-open">
            <a href="UserReport.php" class="nav-link <?php if($a==15){ echo 'active'; }?>">
               <i class="fa fa-users nav-icon"></i>
              <p>
             User Reports
              </p>
            </a>
          </li> 
		  
		  <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">BLOG SECTION</h5>
			</li>
		  
		   <li class="nav-item has-treeview menu-open">
            <a href="add-category.php" class="nav-link <?php if($a==6){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                Add Blog Category
              </p>
            </a>
          </li> 
		  <li class="nav-item has-treeview menu-open">
            <a href="add-blog.php" class="nav-link <?php if($a==7){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                Add New Blog
              </p>
            </a>
          </li> 
		   
		  <li class="nav-item has-treeview menu-open">
            <a href="view-blog.php" class="nav-link <?php if($a==8){ echo 'active'; }?>">
               <i class="fa fa-eye nav-icon"></i>
              <p>
                View Blog
              </p>
            </a>
          </li> 


          <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">Header</h5>
			</li>
          <li class="nav-item has-treeview menu-open">
            <a href="headDash.php" class="nav-link <?php if($a==12){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
              Home Page Management
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview menu-open">
            <h5 class="pt-2 pb-2" style="color:white;">OTHER OPTIONS</h5>
			</li>
        
           <li class="nav-item has-treeview menu-open">
            <a href="add-testimonials.php" class="nav-link <?php if($a==5){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                Add Testimonials
              </p>
            </a>
          </li> 
          
         <!-- <li class="nav-item has-treeview menu-open">
            <a href="faqs.php" class="nav-link <?php if($a==10){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                FAQ
              </p>
            </a>
          </li> -->
          <li class="nav-item has-treeview menu-open">
            <a href="recentPost.php" class="nav-link <?php if($a==11){ echo 'active'; }?>">
               <i class="fa fa-plus nav-icon"></i>
              <p>
                Recent Post
              </p>
            </a>
          </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>