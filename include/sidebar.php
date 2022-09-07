<!-- Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-virus"></i>
    </div>
    <div class="sidebar-brand-text mx-5">COVID19-نظام التحليل الالكتروني</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


<li class="nav-item">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>لوحة التحكم</span></a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
   
        <span>فنى سحب دم</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add-phlebotomist.php">اضافة</a>
             <a class="collapse-item" href="manage-phlebotomist.php">ادارة</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">

        <span>الفحوصات</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="new-test.php">جديد</a>
            <a class="collapse-item" href="assigned-test.php">مسجل</a>
            <a class="collapse-item" href="ontheway-samplecollection-test.php">في انتظار جمع العينات<br /> مجموع العينات </a>
             <a class="collapse-item" href="sample-collected-test.php">العينات الجاهزة</a>
               <a class="collapse-item" href="samplesent-lab-test.php">ترسل الى المختبر</a>
                <a class="collapse-item" href="reportdelivered-test.php">تقارير مستلمة</a>
<a class="collapse-item" href="all-test.php">جميع الفحوصات</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">

        <span>التقرير</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="bwdates-report-ds.php">تقرير محدد</a>
             <a class="collapse-item" href="search-report.php">البحث عن تقرير</a>
            </div>
    </div>
</li>

       

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<li class="nav-item active">
    <a class="nav-link" href="profile.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Admin</span></a>
</li>

       

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->

        <!-- End of Sidebar -->
        <style>
            ul{
                width: 50px;
            }
           

        </style>        <?php endif;    ?>   