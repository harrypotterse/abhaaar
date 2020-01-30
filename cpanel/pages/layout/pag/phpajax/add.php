<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
//Array ( [Title] => a [Details] => a [link] => a )
//Array ( [Page] => التواصل [Title] => a [Details] => ) 
$true = TRUE;
$msgerr = "";
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Details = filter_var($_POST['Details'], FILTER_SANITIZE_STRING);
$Page = filter_var($_POST['Page'], FILTER_SANITIZE_STRING);
$Function= filter_var($_POST['Function'],FILTER_SANITIZE_STRING);
//=======================
//=================================
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Details)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Page)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
   
    $SQL = "INSERT INTO `opinions` (`id`, `comment`, `Name`, `Function`, `Section`) VALUES (NULL,?,?,?,?);";
    $array = array($Details, $Title, $Function, $Page);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "التعليقات";
    $labal = "label label-warning";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>