<?php
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Extra_functions.php';
session_start();
session_regenerate_id();
if (!isset($_SESSION['user'])):
header("location: ../../examples/login.php");
exit();
endif;
$a = new Achieve();
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>الصفحة الرئسية</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" type="image/x-icon" href="../icons8-code-64.png">
<!-- Bootstrap 3.3.4 -->
<?php require_once '../Component/css.php'; ?>
<link href="css/index.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=sheba" />
<link href="css/Total_adjustment.css" rel="stylesheet" type="text/css"/>

</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="skin-blue fixed sidebar-mini" dir="rtl">
<!-- Site wrapper -->
<div class="wrapper">
<?php require_once '../Component/nav.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<h1 style="
text-align: center;
font-family: tahoma;
font-weight: 700;
font-size: 88px;
letter-spacing: 6px;
">  Obhur   <be style="
font-family: tahoma;
font-size: 58px;
letter-spacing: 22px;
color: #3c8dbc;
text-transform: uppercase;
">Dashboard</be></h1> 

<div class="row" style="background: white;box-shadow: inset 2px -1px 4px black;background: white;box-shadow: inset 2px -1px 4px black;background-image: url(http://tanzatechnology.co.tz/wp-content/uploads/2018/05/img4.jpg);background-repeat: no-repeat;background-position: center center;background-attachment: fixed;">                   
<div class="container">
<div class="row">     
<h1 style="color: white;font-family: 'Lalezar', cursive;"> افضل الصفحات</h1>
<?php
$sql = "SELECT * FROM `counter_db`  ORDER BY `counter_db`.`count` DESC limit 1  ";
$sql2 = "SELECT * FROM `counter_db` ORDER BY `counter_db`.`count` DESC";

$sth = $Data_communication->prepare($sql);
$sth->execute();
$sth->bindColumn('count', $count);
$result = $sth->fetchAll();
(int) $count;

$array = array();
$rows = $a->sql_feth($Data_communication, $sql2, $array);
foreach ($rows as $value) :
$id = $value['id'];
$pag = $value['pag'];
$label = $value['label'];
$count_lab = $value['count'];
$time = $value['time'];
if ($pag == "Home") {
$pag = "الصفحة الرئسية";
} elseif ($pag == "Our_Services") {
$pag = "خدماتنا";
} elseif ($pag == "Best_offers") {
$pag = "أفضل العروض";
} elseif ($pag == "Blog") {
$pag = "العروض";
} elseif ($pag == "About_Us") {
$pag = "معلومات عنا";
}
?>
<div class="progress">
<div class="<?php echo $label; ?>" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round($count_lab / $count * 100) ?>%">
<span class="sr-only">40% Complete (success)</span>
</div>
<span class="progress-type"><?php echo $pag; ?></span>
<span class="progress-completed"><?php echo round($count_lab / $count * 100) ?>%</span>
</div>
<?php endforeach; ?>
</div>
</div>
</div>


<div class="row" style="
background: #e2e1e1;
">
<section class="" id="prototype">
<div class="container">
<div class="row">
<div class="prototype-container">
<div class="prototype left protoype-marges"></div>
<div class="clear"></div>
<div class="prototype right">
<img src="https://www-static.api.video/image/icon-hexagone.svg" alt="Roadmap API video - live streaming">
<span>الاختصارات</span>
<div></div>
<p style="
text-align: left;
margin-top: 12px;
font-size: 17px;
font-weight: 500;
">تمكنك لوحة التحكم من الوصول السريع للصفحات من خلال الاختصارات لسهولة التحكم للوصول للأختصارات اضغط حرف H</p>
</div>
<div class="clear"></div>
<div class="prototype left">
<span>عدد زيارات المواقع</span>
<p style="
text-align: left;
margin-top: 12px;
font-size: 17px;
font-weight: 500;
">كما تتيح لك لوحة التحكم التعرف علي عدد الزيارات الخاصة بالمواقع  لتتعرف علي نسب الزيارات علي المواقع الخاص بك</p>
<img src="https://www-static.api.video/image/icon-hexagone.svg" alt="Roadmap API video - Channels">
</div>
<div class="clear"></div>
<div class="prototype right">
<img src="https://www-static.api.video/image/icon-hexagone.svg" alt="Roadmap API video - Multi user">
<span>الاحصائيات</span>
<p>كما تتيح لك لوحة التحكم التعرف علي أخر الزيارات ونسب المشاهدة وترتيب افضلية الصفحات لتتعرف علي افضل الصفحات من خلال قسم <span style="
font-family: tahoma;
font-size: 10px;
letter-spacing: 0px;
" class="label label-info">أحصائيات الزيارات</span></p>
</div>
<div class="clear"></div>
<div class="prototype left">
<span>خريطة المواقع</span>
<p style="
text-align: left;
margin-top: 12px;
font-size: 17px;
font-weight: 500;
" >كما تتيح لك لوحة التحكم خريطة المواقع للربط بين لوحة التحكم والمواقع مع الازرر للوصول للعناصر المتحكمة في الصفحات مع عنصر رابط الصفحة للمعاينة والمشاهدة</p>
<img src="https://www-static.api.video/image/icon-hexagone.svg" alt="Roadmap API video - Audience">
</div>
<div class="clear"></div>

</div>
</div>
</div>
</section>
</div>

<div class="row" style="
background: #e2e1e1;
">
<div class="container">
<div class="row" style="
margin-top: 79px;
">
<h1> خريطة المواقع</h1>
<div class="timeline-centered">
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-success">
<i class="entypo-feather"></i>
</div>

<div class="timeline-label">

</div>

</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#  من نحن</h1>
<div class="hover08 column"> <div> <figure>    <img src="img/2.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>

</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#  المميزات</h1>
<div class="hover08 column"> <div> <figure>       <img src="img/3.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../features/Show.php">المميزات</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>

</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط# خدماتنا</h1>
<div class="hover08 column"> <div> <figure>     <img src="img/4.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../services/show_section.php">خدماتنا</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>

</article>

<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>أحجز الأن#   رابط</h1>
<div class="hover08 column"> <div> <figure>    <img src="img/5.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-primary btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#   افضل العروض</h1>
<div class="hover08 column"> <div> <figure>       <img src="img/6.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../best_offers/Show.php">أفضل العروض</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#   ارءا عملائنا</h1>
<div class="hover08 column"> <div> <figure>           <img src="img/7.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../customer_opinions/Show.php">اراء العملاء</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#   المدونة</h1>
<div class="hover08 column"> <div> <figure>        <img src="img/8.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../blog/Show.php">المدونة</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php">مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php"> مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>رابط#   معرض الصور</h1>
<div class="hover08 column"> <div> <figure>      <img src="img/9.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../index.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../pictures/Show.php">معرض الصور</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/index_pag.php" >مكونات الصفحة الرئسية العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/index_pag_eng.php" > مكونات الصفحة الرئسية الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>صفحة#   صفحة التسجيل</h1>
<div class="hover08 column"> <div> <figure>         <img src="img/10.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../sign.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../recording_slides/Show.php">شرائح صفحة التسجيل</a>
<div class="or or-lg"></div>
<a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/Registration.php">مكونات صفحة التسجيل العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/Registration_eng.php"> مكونات صفحة التسجيل الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1> التسجيل كموظف#   صفحة</h1>
<div class="hover08 column"> <div> <figure>           <img src="img/11.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
<a type="button" class="btn btn-success btn-lg" href="../../../../sign-employe.php">رابط الصفحة</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../">التسجيل كموظف</a>
<div class="or or-lg"></div>
<a type="button" href="../index/Show.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-primary btn-lg" href="../spread/Employee.php"> صفحة التسجيل كموظف العربية</a>
<div class="or or-lg"></div>
<a type="button" class="btn btn-success btn-lg" href="../spread/Employee_eng.php">  صفحة التسجيل كموظف الانجليزية</a>
</div>
</div>
</div>
</article>
<article class="timeline-entry">

<div class="timeline-entry-inner">

<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>

<div class="timeline-label">
<h1>التسجيل كزائر#   صفحة</h1>
<div class="hover08 column"> <div> <figure>             <img src="img/12.png" alt="" class="img-thumbnail img-responsive" width="700"/>                                  
<div class="ui-group-buttons">
    <a type="button" class="btn btn-success btn-lg" href="../../../../sign-visitor.php">رابط الصفحة</a>
    <div class="or or-lg"></div>
    <a type="button" class="btn btn-primary btn-lg" href="Show.php">التسجيل كزائر</a>
    <div class="or or-lg"></div>
    <a type="button" href="../spread/Links.php" class="btn btn-success btn-lg">مكونات الصفحات</a>
    <div class="or or-lg"></div>
    <a type="button" class="btn btn-primary btn-lg" href="../spread/Visit.php"> صفحة التسجيل كزائر العربية</a>
    <div class="or or-lg"></div>
    <a type="button" class="btn btn-success btn-lg" href="../spread/Visit_eng.php">  صفحة التسجيل كزائر الانجليزية</a>
</div>
</div>
</div>
</article>
</div>
</div>
</div>
</div>
<div class="row" style="
background: #f8f8f8;
">
<div class="container">
<div class="row" style="
margin-top: 79px;
">
<?php
$today = date('Y-m-d');
?>
<div class="col-md-4">
<!-- Info Boxes Style 2 -->
<div class="info-box bg-yellow">
<span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
<div class="info-box-content">
<span class="info-box-text">عدد الحجوزات</span>
<span class="info-box-number"><?php
$sqls2 = "SELECT * FROM `bookings`  ";
echo rowCount($Data_communication, $sqls2, $today);
?></span>
<div class="progress">
<div class="progress-bar" style="width: 20%"></div>
</div>
</div><!-- /.info-box-content -->
</div><!-- /.info-box -->
<div class="info-box bg-green">
<span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
<div class="info-box-content">
<span class="info-box-text">عدد الزائرين</span>
<span class="info-box-number"><?php
$sqls2 = "SELECT * FROM `visits`  ";
echo rowCount($Data_communication, $sqls2, $today);
?></span>
<div class="progress">
<div class="progress-bar" style="width: 20%"></div>
</div>
</div><!-- /.info-box-content -->
</div><!-- /.info-box -->
<div class="info-box bg-red">
<span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
<div class="info-box-content">
<span class="info-box-text">عدد الموظفين</span>
<span class="info-box-number"><?php
$sqls2 = "SELECT * FROM `employee`  ";
echo rowCount($Data_communication, $sqls2, $today);
?></span>
<div class="progress">
<div class="progress-bar" style="width: 70%"></div>
</div>
</div><!-- /.info-box-content -->
</div><!-- /.info-box -->
<div class="info-box bg-aqua">
<span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
<div class="info-box-content">
<span class="info-box-text">حجوزات اليوم</span>
<span class="info-box-number"><?php
$today = date('Y-m-d');
$sqls = "SELECT * FROM `bookings` where di = ? ";
echo rowCount($Data_communication, $sqls, $today);
?></span>
<div class="progress">
<div class="progress-bar" style="width: 40%"></div>
</div>
</div><!-- /.info-box-content -->
</div><!-- /.info-box -->
<div class="box box-default">
</div><!-- /.box -->
</div>
<div class="col-md-8">
<h1>النماذج والتطبيقات المنفصلة</h1>
<p style="font-size: 20px;font-weight: 600;">يحتوي الموقع علي ثلاث نماذج منفصلة للتحكم في سجل الزائرن وسجل الموظفين وسجل الحجوزات  من خلال الروابط التالية</p>
<div class="btn-group">
    <a type="button" href="../visits/Show.php" class="btn btn-primary">الزائرين</a>
    <a type="button" class="btn btn-primary" href="../employee/Show.php">الموظفين</a>
    <a type="button" class="btn btn-primary" href="../bookings/Show.php">الحجوزات</a>
</div>
<h1>التطبيقات الافتراضية</h1>
<p style="font-size: 20px;font-weight: 600;">كما تحتوي لوحة التحكم علي تطبيقان لصفحات منفصلة لأدارة الحجوزات وسجل الزائين من حيث البحث الكلي والبحث بين تاريخين ومعرفة حجوزات اليوم ومعرفة ابتداء وانتهاء عضوية الزائرين لمراجعة التطبيقات من خلال الروابط الاتية</p>
<div class="btn-group">
    <a type="button" href="../Application_bookings/visits.php" class="btn btn-primary">الزائرين</a>
    <a type="button" class="btn btn-primary" href="../Application_bookings/Application_bookings.php">الحجوزات</a>
    
</div>
</div>
</div>
</div>
</div>
<?php require_once '../Othercomponents/lastadd_1.php'; ?>
</div><!-- /.content-wrapper -->
<?php require_once '../Component/footer.php'; ?>
<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<?php require_once '../Component/js.php'; ?>
<script src="../../js/Shortcuts.js" type="text/javascript"></script>
<script>
$(document).ready(function () {

$('.star').on('click', function () {
$(this).toggleClass('star-checked');
});

$('.ckbox label').on('click', function () {
$(this).parents('tr').toggleClass('selected');
});

$('.btn-filter').on('click', function () {
var $target = $(this).data('target');
if ($target != 'all') {
$('.table tr').css('display', 'none');
$('.table tr[data-status="' + $target + '"]').fadeIn('slow');
} else {
$('.table tr').css('display', 'none').fadeIn('slow');
}
});

});
</script>

</body>
</html>
