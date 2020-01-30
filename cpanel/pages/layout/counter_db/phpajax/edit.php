<?php

require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$id = $_POST['id'];
$Page = $_POST['Page'];
$Experience = $_POST['Experience'];
$Details = $_POST['Details'];
$url = $_POST['url'];

//=========================
//=================================
if (!$a->empty_filed($Page)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك القسم فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Experience)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك العنوان فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Details)):
    $msgerr .= "<div class='alert alert-danger'> من فضلك لاتترك تفاصيل الاعلان فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($url)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الرابط فارغا</div>";
    $true = FALSE;
elseif (!$a->Validate_URL($url)):
    $msgerr .= "<div class='alert alert-danger'>الرابط غير صالح</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    $SQL = "UPDATE `ads` SET `Title` = ? , `Details` = ? , `Page` = ? , `image` = ?  WHERE `ads`.`id` = ? ;";
    $array = array($Experience, $Details, $Page, $url,$id);
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";

endif;
echo $msgerr;
?>