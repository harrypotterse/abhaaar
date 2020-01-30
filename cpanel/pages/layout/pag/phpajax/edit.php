<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
$id = $_POST['id'];
$Ad_Title = filter_var($_POST['Ad_Title'], FILTER_SANITIZE_STRING);
$Details = filter_var($_POST['Details'], FILTER_SANITIZE_STRING);
$Pictures = filter_var($_POST['Pictures'], FILTER_SANITIZE_STRING);
$Title= filter_var($_POST['Title'],FILTER_SANITIZE_STRING);
$Detailshas= filter_var($_POST['Detailshas'],FILTER_SANITIZE_STRING);
//=======================
//=================================
if (!$a->empty_filed($Ad_Title)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Details)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Pictures)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->Validate_URL($Pictures)):
    $msgerr .= "<div class='alert alert-danger'>الرابط غير صحيح</div>";
    $true = FALSE;
endif;


if ($true == TRUE):
    $SQL = "UPDATE `main_ads` SET `Ad_Title` = ?, `Details` = ?, `Pictures` =?, `Title` =?, `Detailshas` = ?  WHERE `main_ads`.`id` = ?;";
    $array = array($Ad_Title, $Details, $Pictures, $Title,$Detailshas,$id);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
endif;
echo $msgerr;
?>