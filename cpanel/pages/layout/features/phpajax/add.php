<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
$Icons = filter_var($_POST['Icons'], FILTER_SANITIZE_STRING);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Explanation= filter_var($_POST['Explanation'],FILTER_SANITIZE_STRING);
//=======================
//=================================
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Icons)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Explanation)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
   $sql="INSERT INTO `features` (`id`, `Language`, `Icons`, `Title`, `Explanation`) VALUES (NULL, ?, ?, ?, ?);";
    $array = array($Language, $Icons, $Title, $Explanation);
    $a->sql($Data_communication, $sql, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "المميزات";
    $labal = "label label-warning";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>