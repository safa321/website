<?php
session_start();?>

   <div class="top">
   <nav class="navbar navbar-expand navbar-light  topbar mb-6 static-top ">
 <?php  

            include_once('include/config.php');
      
     ?>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                  
                    <!-- Topbar Search -->
          <?php
           $name=$_SESSION['name'];
             if($_SESSION['aid']):?>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
<?php $query=mysqli_query($con,"SELECT * from tbltestrecord where ReportStatus is null ");
$count=mysqli_num_rows($query);


?>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow ">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo $count;?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    الاشعارات
                                </h6>
                                <?php if($count>0){
while($row=mysqli_fetch_array($query)){
                                    ?>
                                <a class="dropdown-item d-flex align-items-center" href="test-details.php?tid=<?php echo $row['id'];?>&&oid=<?php echo $row['OrderNumber'];?>">
                                    <div class="mr-2">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?php echo $row['RegistrationDate'];?></div>
                                        <span class="font-weight-bold">تم استلام فحص جديد # <?php echo $row['OrderNumber'];?></span>
                                    </div>
                                </a>
                            <?php }} else{?>
                                <p style="color:red">لا توجد قيود</p>
                            <?php } ?>
                            
                                <a class="dropdown-item text-center small text-gray-500" href="new-test.php">اظهار جميع الاشعارات</a>
                            </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-2">  
                <?php
                //Fetching admin Name
$adid=$_SESSION['aid'];
$ret1=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adid' ");
while($row1=mysqli_fetch_array($ret1)){

?>

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <span class="mr-1 d-none d-lg-inline text-gray-1000 small" ><?php  echo $row1['AdminName'];?></span>
                        
                            <img class="img-profile rounded-circle" src="img/user-filled-person-shape.png">
                            </a>   <?php } ?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    الملف الشخصي
                                </a>
                                <a class="dropdown-item" href="change-password.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  تغيير كلمة المرور
                                </a>
                       
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    تسجيل خروج
                                </a>
                            </div>
                        </li>

                    </ul>
                <?php endif;?>

                </nav></div>
                <style>
  .navbar {
 
    padding: 1.5rem 13rem;
    background-color:#5377db;
}
.top{
    margin-top:-25px ;
    /*margin-right:65px ;*/


}
                </style>
              