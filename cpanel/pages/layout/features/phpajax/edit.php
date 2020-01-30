<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
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
    $sql="UPDATE `features` SET `Language` = ?, `Icons` = ?, `Title` = ?, `Explanation` = ? WHERE `features`.`id` = ?;";
    $array = array($Language, $Icons, $Title, $Explanation,$id);
    $a->sql($Data_communication, $sql, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
endif;
echo $msgerr;
?>