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
$component5 = $_POST['component5'];
$component6 = $_POST['component6'];
$component7 = $_POST['component7'];
$component8 = $_POST['component8'];
$component9 = $_POST['component9'];
$component10 = $_POST['component10'];
$component11 = $_POST['component11'];
$component12 = $_POST['component12'];
$component13 = $_POST['component13'];
$component14 = $_POST['component14'];
$component15 = $_POST['component15'];
$component16 = $_POST['component16'];
$component17 = $_POST['component17'];
$component18 = $_POST['component18'];
$component19 = $_POST['component19'];
$component20 = $_POST['component20'];
$component21 = $_POST['component21'];
$component22 = $_POST['component22'];
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
if (!$a->empty_filed($component5)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component6)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component7)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component8)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component9)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component10)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component11)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component12)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component13)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component14)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component15)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component16)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component17)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component18)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component19)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component20)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component21)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($component22)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقل فارغا</div>";
    $true = FALSE;
endif;






if ($true == TRUE):
    $array=array();
    foreach ($_POST as $value) {
      $array[]=$value;  
    }
    $SQL = "UPDATE `page_components` SET `statement1` = ?, `statement2` = ?, `statement3` = ?, `statement4` = ?, `statement5` = ?, `statement6` = ?, `statement7` = ?, `statement8` = ?, `statement9` = ?, `statement10` = ?, `statement11` = ?, `statement12` = ?, `statement13` = ?, `statement14` = ?, `statement15` = ?, `statement16` = ?, `statement17` = ?, `statement18` = ?, `statement19` = ? , `statement20` = ? , `statement21` = ? , `statement22` = ?     WHERE `page_components`.`id` =1;";
    $a->sql($Data_communication, $SQL, $array);
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";

endif;
echo $msgerr;
?>