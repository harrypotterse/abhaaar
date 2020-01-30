<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../../Classes/Achieve.php';
require_once '../../../../../FileConnection/Data_connection.php';
$a = new Achieve();
//Array ( [Page] => 1 [Experience] => a [Details] => b [url] => c )
$true = TRUE;
$msgerr = "";
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$filter = filter_var($_POST['filter'], FILTER_SANITIZE_STRING);
$ids= filter_var($_POST['ids'],FILTER_SANITIZE_STRING);
//=========================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>لاتترك حقول فارغة</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($filter)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك قم بأختتيار قسم </div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    $target_path = filter_var($_POST['file'], FILTER_SANITIZE_STRING);
} else if (!in_array($ext, $extensions)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Upload valiid images. Only PNG and JPEG are allowed</div>";
    $true = FALSE;
} else if (($_FILES["uploadFile"]["size"] > 1000000)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>Image size exceeds 1MB</div>";
    $true = FALSE;
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
    $SQL = "UPDATE `project` SET `Project` = ?, `Image` = ? , `Filtering` = ?  , `ids` = ?  WHERE `project`.`id` = ?;";
    $array = array($Name, $target_path, $filter,$ids, $id);
    $a->sql($Data_communication, $SQL, $array);
    echo("<meta http-equiv='refresh' content='1'>");
    $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";

endif;
echo $msgerr;
?>