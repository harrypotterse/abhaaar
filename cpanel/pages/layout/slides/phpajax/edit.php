<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
$id = $_POST['id'];
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Subtitle = filter_var($_POST['Subtitle'], FILTER_SANITIZE_STRING);
$Additional_Address = filter_var($_POST['Additional_Address'], FILTER_SANITIZE_STRING);
//=======================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Subtitle)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Additional_Address)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الحقول فارغة</div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    $target_path = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
}

if ($true == TRUE):
    if (!file_exists($file_tmp)) {
        $target_path = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
    } else {
        //====================================================
        $DelFilePath = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
        $Images = "../uplod/" . $DelFilePath;
        if (file_exists($Images)) {
            unlink($Images);
        } else {
            echo "no";
        }
        //=====================================================
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $target_path = '../uplod/' . time() . $_FILES['uploadFile']['name'];
        if (move_uploaded_file($file_tmp, $target_path)) {
            $target_path = time() . $_FILES['uploadFile']['name'];
        }
    }
    $SQL = "UPDATE `slides` SET `Image` = ?, `Title` = ?, `Subtitle` = ?, `Additional_Address` = ? WHERE `slides`.`id` = ?;";
    $array = array($target_path, $Title, $Subtitle, $Additional_Address, $id);
    $a->sql($Data_communication, $SQL, $array);
    echo("<meta http-equiv='refresh' content='1'>");
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
endif;
echo $msgerr;
?>