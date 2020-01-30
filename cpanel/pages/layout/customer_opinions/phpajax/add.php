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
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$Function = filter_var($_POST['Function'], FILTER_SANITIZE_STRING);
$Explanation = filter_var($_POST['Explanation'], FILTER_SANITIZE_STRING);
//=======================
//=================================
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Function)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Explanation)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    $sql = "INSERT INTO `customer_opinions` (`id`, `Language`, `Explanation`, `Name`, `Function`) VALUES (NULL,?,?,?,?);";
    $array = array($Language, $Explanation, $Name, $Function);
    $a->sql($Data_communication, $sql, $array);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
    $section = "اراء العملاء";
    $labal = "label label-success";
    $time = time();
    $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
    $array = array($section, $time, $labal);
    $a->sql($Data_communication, $sql, $array);
endif;
echo $msgerr;
?>