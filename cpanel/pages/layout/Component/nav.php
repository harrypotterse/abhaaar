<?php
if ($_SERVER['QUERY_STRING'] == "logout") {
    session_destroy();
    exit();
}
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
$class = new Achieve();
?>
<header class="main-header">
    <!-- Logo -->
    <a href="../index/Show.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>MON</b>Das</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>المركز الذهبي</b>Dashboard</span>
    </a>
    <style>
        li.header {
            font-size: 17px !important;
            color: #2ab7fe !important;
            font-weight: 700;
        }
        .info-box-text {
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
    </nav>
</header>
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li><a  class="list" href="../index/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span>الرئسية</span></a></li>
            <li class="header">الصفحة الرئسية</li>
            <li><a  class="list"  href="../slides/Show.php"><i class="fa fa-circle-o text-red"></i> <span>الاعلانات</span></a></li>
            <li><a class="list"  href="../offers/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span> العروض الاساسية </span></a></li>
            <li><a class="list"  href="../blog/Show.php"><i class="fa fa-circle-o text-red"></i> <span> المدونة </span></a></li>
            <li><a class="list"  href="../pictures/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span>اقسام المعارض</span></a></li>
            <li><a class="list"  href="../gallery/Show.php"><i class="fa fa-circle-o text-aqua"></i> <span> المعارض</span></a></li>
            <li><a class="list"  href="../best_offers/Show.php"><i class="fa fa-circle-o text-red"></i> <span> افضل العروض</span></a></li>
            <li><a class="list"  href="../customer_opinions/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span>اراء العملاء</span></a></li>
            <li><a class="list"  href="../features/Show.php"><i class="fa fa-circle-o text-red"></i> <span>المميزات </span></a></li>
            <li><a class="list"  href="../services/Show.php"><i class="fa fa-circle-o text-aqua"></i> <span>الخدمات</span></a></li>
            <li class="header">صفحة التسجيل</li>
            <li><a  class="list"  href="../recording_slides/Show.php"><i class="fa fa-circle-o text-red"></i> <span>شرائح صفحة التسجيل</span></a></li>
            <li class="header">النماذج</li>
            <li><a class="list"  href="../bookings/Show.php"><i class="fa fa-circle-o text-yellow"></i>الحجوزات<span class="badge bookings"></span></span></a></li>
            <li><a class="list"  href="../employee/Show.php"><i class="fa fa-circle-o text-yellow"></i>التسجيل كموظف<span class="badge employee"></span></span></a></li>
            <li><a class="list"  href="../visits/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span> التسجيل كزائر <span class="badge visits"></span></span></a></li>
            <li><a class="list"  href="../Join/Show.php"><i class="fa fa-circle-o text-yellow"></i> <span> طلبات الانضمام <span class="badge join_mail"></span></span></a></li>
            <li class="header">لوحة التحكم</li>
            <li><a class="list"  href="../spread/Links.php"><i class="fa fa-circle-o text-red"></i> <span>مكونات الصفحات</span></a></li>
            <li><a class="list"  href="../counter_db/Show.php"><i class="fa fa-circle-o text-aqua"></i> <span>أحصائيات الزيارات</span></a></li>
            <li><a class="list"  href="../user_admin/Show.php"><i class="fa fa-circle-o text-aqua"></i> <span>مستخدمين لوحة التحكم</span></a></li>
            <li><a class="list"  href="?logout"><i class="fa fa-circle-o text-aqua"></i> <span>تسجيل الخروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->