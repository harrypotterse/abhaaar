<?php
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
//=========================
$component1 = $_POST['component1'];
$component2 = $_POST['component2'];
$component3 = $_POST['component3'];
$component4 = $_POST['component4'];

//=================================
if (!$a->empty_filed($component1)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component2)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component3)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component4)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    $array=array();
    foreach ($_POST as $value) {
      $array[]=$value;  
    }
    $SQL = "UPDATE `page_components` SET `statement1` = ?, `statement2` = ?, `statement3` = ?, `statement4` = ? WHERE `page_components`.`id` = 3;
";
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";

endif;
echo $msgerr;
?>